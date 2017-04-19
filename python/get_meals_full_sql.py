import urllib.request
import re
import time

start_time = time.time()
#gets list of meals from a static list of restaurants
#read restaurant file
restaurantfile = open('C:\\Users\\Steve\Desktop\\Dropbox\\Steve\\WIP\\LesserEvil\\python\\restaurants-test.txt')
restaurantlist = restaurantfile.readlines()

#for each restaurant get meals
for restaurant in restaurantlist:
    print('I just started a new restaurant')
    restaurantdecode = restaurant.rstrip()
    #open restaurant category page
    htmlfile = urllib.request.urlopen('http://www.caloriecount.com/' + restaurantdecode)
    htmlfileread = htmlfile.read()
    htmltext = htmlfileread
    print('I just read the restaurant category page. Now I sleep.')
    time.sleep(10) #delay 5 seconds to prevent connection closure
    print('Done sleeping!')
    print("--- %s seconds ---" % (time.time() - start_time))
    #get subppages. max of 3
    subpages = ['http://www.caloriecount.com/' + restaurantdecode+'-1', 'http://www.caloriecount.com/' + restaurantdecode+'-2',
    'http://www.caloriecount.com/' + restaurantdecode+'-3']

    for item in subpages:
        subpagefile = urllib.request.urlopen(item)
        subpagetext = subpagefile.read()
        print('I just read a subpage. Now I sleep')
        time.sleep(10) #delay 5 seconds to prevent connection closure
        print('Done sleeping!')
        if subpagetext != htmlfileread:
            htmltext += subpagetext
            print("--- %s seconds ---" % (time.time() - start_time))
        else:
            print('No more subpages!')
            print("--- %s seconds ---" % (time.time() - start_time))
    #get meal links
    pattern = re.compile(b'href=[\'"]?http://www\.caloriecount\.com/calories([^\'" >]+)')
    meals = re.findall(pattern,htmltext)
    #get restaurant formated title
    restaurantpattern = re.compile(b'<h1>(.+?) Nutrition</h1>')
    restaurantname = re.search(restaurantpattern,htmltext)
    #create file for restaurant
    filename = restaurantname.group(1).decode()
    file = open('C:\\Users\\Steve\Desktop\\Dropbox\\Steve\\WIP\\LesserEvil\\python\\data\\'+filename+'.php', 'a')
    file.write('<?php $conn = new mysqli(\'db558054145.db.1and1.com\', \'dbo558054145\', \'lesserEv!l123\', \'db558054145\'); if ($conn->connect_error) { die("connection failed:" . $conn->connect_error); } $sql = \'\';')
    sqltable = '\n $sql .= "CREATE TABLE `'+filename.replace("'", "")+'` (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT \''+filename.replace("'", "")+'\', `High Protein` int(1) DEFAULT \'0\',     `Gluten Free` tinyint(1) DEFAULT \'0\', `Low Calorie` tinyint(1) DEFAULT \'0\', `Low Carbs` tinyint(1) DEFAULT \'0\',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL UNIQUE, `mealDesc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP); "; \n'
    sqlrestaurant = '\n $sql .= "INSERT IGNORE INTO restaurant (restName) VALUES (\''+filename.replace("'", "")+'\'); "; \n'
    file.write(sqlrestaurant)
    file.write(sqltable)
    itemcount = 0
    for item in meals:
        itemcount = itemcount + 1
        #get meal url
        mealfile = urllib.request.urlopen('http://www.caloriecount.com/calories'+item.decode())
        mealtext = mealfile.read()
        print('I just read the meal file. Now I sleep. Meal #'+str(itemcount))
        time.sleep(20) #delay 5 seconds to prevent connection closure
        print('Done sleeping!')
        print("--- %s seconds ---" % (time.time() - start_time))
        print('Now I search for the meal data. Meal #'+str(itemcount))
        #get meal name
        namepattern = re.compile(b'<h1>Calories in (.+?)</h1>')
        name = re.search(namepattern,mealtext)
        #get calories
        caloriespattern = re.compile(b'<span class="miniCal">(.+?)</span>')
        calories = re.search(caloriespattern,mealtext)
        if calories == None:
            nutrCal = 0
        else:
            nutrCal = int(float(calories.group(1).decode()))
        #get fat
        fatpattern = re.compile(b'<span class="miniFat">(.+?)</span>')
        fat = re.search(fatpattern,mealtext)
        if fat == None:
            nutrFat = 0
        else:
            nutrFat = int(float(fat.group(1).decode()))
        #get sat fat
        satfatpattern = re.compile(b'<span class="miniSFat">(.+?)</span>')
        satfat = re.search(satfatpattern,mealtext)
        if satfat == None:
            nutrSatFat = 0
        else:
            nutrSatFat = int(float(satfat.group(1).decode()))
        #get cholesterol
        cholpattern = re.compile(b'<span class="miniChol">(.+?)</span>')
        cholesterol = re.search(cholpattern,mealtext)
        if cholesterol == None:
            nutrChol = 0
        else:
            nutrChol = int(float(cholesterol.group(1).decode()))
        #get sodium
        sodiumpattern = re.compile(b'<span class="miniSodium">(.+?)</span>')
        sodium = re.search(sodiumpattern,mealtext)
        if sodium == None:
            nutrSodium = 0
        else:
            nutrSodium = int(float(sodium.group(1).decode()))
        #get carbs
        carbspattern = re.compile(b'<span class="miniCarb">(.+?)</span>')
        carbs = re.search(carbspattern,mealtext)
        if carbs == None:
            nutrCarb = 0
        else:
            nutrCarb = int(float(carbs.group(1).decode()))
        #get fiber
        fiberpattern = re.compile(b'<span class="miniFiber">(.+?)</span>')
        fiber = re.search(fiberpattern,mealtext)
        if fiber == None:
            nutrFiber = 0
        else:
            nutrFiber = int(float(fiber.group(1).decode()))
        #get sugar
        sugarspattern = re.compile(b'<span class="miniSugar">(.+?)</span>')
        sugars = re.search(sugarspattern,mealtext)
        if sugars == None:
            nutrSugar = 0
        else:
            nutrSugar = int(float(sugars.group(1).decode()))
        #get protein
        proteinpattern = re.compile(b'<span class="miniProtein">(.+?)</span>')
        protein = re.search(proteinpattern,mealtext)
        if protein == None:
            nutrProtein = 0
        else:
            nutrProtein = int(float(protein.group(1).decode()))
        print('Now I process the ratings. Meal #'+str(itemcount))

        #now that we have the data for a meal we need to create a rating for it.
        #Create ratings
        proteinRating = 0
        calorieRating = 0
        satfatRating = 0
        sugarRating = 0
        fiberRating = 0
        sodiumRating = 0

        #Create descriptions
        mealDesc = ''

        #Protein rating
        if nutrCal * .12 <= nutrProtein:
            proteinRating = 7
            mealDesc += 'Very high protein to calorie ratio! '
        elif nutrCal * .10 <= nutrProtein:
            proteinRating = 7
            mealDesc += 'Perfect protein to calorie ratio! '
        elif nutrCal * .09 <= nutrProtein:
            proteinRating = 6
            mealDesc += 'Great protein to calorie ratio! '
        elif nutrCal * .08 <= nutrProtein:
            proteinRating = 5
            mealDesc += 'Great protein to calorie ratio! '
        elif nutrCal * .07 <= nutrProtein:
            proteinRating = 4
            mealDesc += 'Good protein to calorie ratio! '
        elif nutrCal * .06 <= nutrProtein:
            proteinRating = 3
            mealDesc += 'Good protein to calorie ratio. '
        elif nutrCal * .05 <= nutrProtein:
            proteinRating = 2
        elif nutrCal * .04 <= nutrProtein:
            proteinRating = 1
            mealDesc += 'Not a good protein to calorie ratio. '
        elif nutrCal * .02 <= nutrProtein:
            proteinRating = -1
            mealDesc += 'Bad protein to calorie ratio. '
        elif nutrCal * .01 <= nutrProtein:
            proteinRating = -2
            mealDesc += 'Bad protein to calorie ratio. '
        elif nutrProtein == 0:
            proteinRating = -3

        #Calorie rating
        if nutrCal <= 250:
            calorieRating = 6
            mealDesc += 'Calories are very low. '
        elif nutrCal <= 300:
            calorieRating = 6
            mealDesc += 'Low calories. '
        elif nutrCal <= 400:
            calorieRating = 5
            mealDesc += 'Low calorie meal. '
        elif nutrCal <= 500:
            calorieRating = 4
            mealDesc += 'Low calorie meal. '
        elif nutrCal <= 600:
            calorieRating = 3
        elif nutrCal <= 650:
            calorieRating = 2
        elif nutrCal <= 699:
            calorieRating = 1
            mealDesc += 'Under 700 calories. '
        elif nutrCal <= 800:
            calorieRating = 0
        elif nutrCal <= 900:
            calorieRating = -1
            mealDesc += 'Pretty high in calories. '
        elif nutrCal <= 1000:
            calorieRating = -2
            mealDesc += 'High in calories! '
        elif nutrCal <= 1100:
            calorieRating = -3
            mealDesc += 'High in calories! '
        elif nutrCal >= 1200:
            calorieRating = -4
            mealDesc += 'Super high in calories! '
        elif nutrCal == 0:
            calorieRating = 0

        #Fat rating
        fatRating = 0
        if nutrCal * .078 <= nutrFat:
            fatRating = -5
            mealDesc += 'Very high percentage of fat. '
        elif nutrCal * .068 <= nutrFat:
            fatRating = -4
            mealDesc += 'Very high percentage of fat. '
        elif nutrCal * .058 <= nutrFat:
            fatRating = -3
            mealDesc += 'Very high percentage of fat. '
        elif nutrCal * .048 <= nutrFat:
            fatRating = -2
            mealDesc += 'Fat percentage is high. '
        elif nutrCal * .040 <= nutrFat:
            fatRating = 0
            mealDesc += 'Fat percentage is a bit high. '
        elif nutrCal * .035 <= nutrFat:
            fatRating = 2
            mealDesc += 'Fat percentage is not bad. '
        elif nutrCal * .032 <= nutrFat:
            fatRating = 3
            mealDesc += 'Fat percentage is good. '
        elif nutrCal * .0287 <= nutrFat:  #20% of the meal is ideal for fat. .0287 * 7 = 20%~
            fatRating = 4
            mealDesc += 'Fat percentage is great. '
        elif nutrCal * .0247 <= nutrFat:
            fatRating = 5
            mealDesc += 'Fat percentage is perfect! '
        elif nutrCal * .0247 <= nutrFat:
            fatRating = 3
            mealDesc += 'Fat percentage is good. '
        elif nutrCal * .020 >= nutrFat:  #Anything below we stop giving a rating
            fatRating = 0

        #Carb rating
        carbRating = 0
        if nutrCal * .15 <= nutrCarb:
            carbRating = -4
            mealDesc += 'Carbohdryate percentage is high. '
        elif nutrCal * .14 <= nutrCarb:
            carbRating = -3
            mealDesc += 'Lots of carbohdyrates. '
        elif nutrCal * .13 <= nutrCarb:
            carbRating = -2
        elif nutrCal * .12 <= nutrCarb:
            carbRating = 0
        elif nutrCal * .11 <= nutrCarb:
            carbRating = 1
        elif nutrCal * .10 <= nutrCarb:
            carbRating = 2
            mealDesc += 'Carbohdryate percentage is not bad. '
        elif nutrCal * .09 <= nutrCarb:
            carbRating = 3
            mealDesc += 'Carbohdryate percentage is good. '
        elif nutrCal * .08 <= nutrCarb:  #40% of the meal is ideal for carbs. .10 * 4 = 40%.
            carbRating = 5
            mealDesc += 'Carbohdryate percentage is great! '
        elif nutrCal * .07 <= nutrCarb:
            carbRating = 3
            mealDesc += 'Carbohdryate percentage is good. '
        elif nutrCal * .06 <= nutrCarb:
            carbRating = 2
            mealDesc += 'Carbohdryate percentage is low. '
        elif nutrCal * .05 <= nutrCarb:
            carbRating = 1
            mealDesc += 'Carbohdryate percentage is low. '
        else:
            carbRating = 0

        #LowCarb rating
        if nutrCarb == 0:
            lowCarbRating = 5
        elif nutrCarb <= 5:
            lowCarbRating = 4
        elif nutrCarb <= 10:
            lowCarbRating = 3
        elif nutrCarb <= 15:
            lowCarbRating = 2
        elif nutrCarb < 20:
            lowCarbRating = 1
        else:
            lowCarbRating = 0

        #Sat Fat rating
        if nutrSatFat == 0:
            satfatRating = 3
        elif nutrSatFat <= 2:
            satfatRating = 2
        elif nutrSatFat <= 4:
            satfatRating = 1
        elif nutrSatFat <= 6:
            satfatRating = 0
        elif nutrSatFat <= 8:
            satfatRating = 0
        elif nutrSatFat <= 11:
            satfatRating = -1
        elif nutrSatFat <= 17:
            satfatRating = -2
            mealDesc += 'High in saturated fat! '
        elif nutrSatFat >= 18:
            satfatRating = -3
            mealDesc += 'High in saturated fat! '

        #Sodium rating
        nutrSodium = 0
        if nutrCal >= 300:
            if nutrSodium == 0:
                sodiumRating = 0
            elif nutrSodium <= 200:
                sodiumRating = 2
            elif nutrSodium <= 500:
                sodiumRating = 1
            elif nutrSodium >= 1500:
                sodiumRating = -2
                mealDesc += 'Very high in sodium! '
            elif nutrSodium >= 1000:
                sodiumRating = -1
                mealDesc += 'High in sodium. '

        #Sugar rating
        if nutrSugar == 0:
            sugarRating = 3
        elif nutrSugar <= 8:
            sugarRating = 2
        elif nutrSugar <= 12:
            sugarRating = 1
        elif nutrSugar >= 25:
            sugarRating = -2
            mealDesc += 'High in sugar. '
        elif nutrSugar >= 15:
            sugarRating = -1

        #Fiber rating
        if nutrFiber >= 5:
            fiberRating = 3
        elif nutrFiber >= 2:
            fiberRating = 1
        elif (nutrFiber == 0) & (nutrCarb >= 20):
            fiberRating = -1

        #add up overall rating
        mealRating = proteinRating + calorieRating + satfatRating + sodiumRating + fiberRating + carbRating + fatRating + sugarRating

        #Set meal flags
        proteinCat = 0
        calorieCat = 0
        carbCat = 0

        if proteinRating >= 3:
            proteinCat = 1
        if calorieRating >= 4:
            calorieCat = 1
        if lowCarbRating != 0:
            carbCat = 1

        print('Ratings for Meal #'+str(itemcount)+ ' Meal Name: '+filename.replace("'", "")+ ' proteinRating: '+str(proteinRating)+ ' fatRating: '+str(fatRating)+ ' carbRating: '+str(carbRating)+ ' calorieRating: '+str(calorieRating)+ ' sugarRating: '+str(sugarRating)+ ' sodiumRating: '+str(sodiumRating)+ ' satfatRating: '+str(satfatRating)+ ' mealRating: '+str(mealRating))

        #write sql data
        if mealRating > 10:
            if nutrCal > 150: #remove anything under 150
                if nutrSugar <= 30: #eliminate sodas and deserts
                    if nutrCal * .078 >= nutrFat: #check for crazy high fat percentage
                        if nutrCal * .18 >= nutrCarb: #check for crazy high carb percentage
                            if nutrCal * .20 >= nutrProtein: #check for crazy high protein percentage
                                if nutrCal * .07 >= nutrSugar: #Stricter sugar rule for deserts, drinks, etc
                                    if nutrCarb * .6 >= nutrSugar: #Sugar can't be above 60% of the carbs
                                        if proteinRating > 0:
                                            sqldata = '\n $sql .= "INSERT IGNORE INTO `'+filename.replace("'", "")+'` (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES (\''+filename.replace("'", "")+'\', \''+str(proteinCat)+'\', \''+str(calorieCat)+'\', \''+str(carbCat)+'\', \''+name.group(1).decode('ISO-8859-1').replace("'", "")+'\', \''+str(mealDesc)+'\', \''+str(nutrFat)+'\', \''+str(nutrSatFat)+'\', \''+str(nutrChol)+'\', \''+str(nutrSodium)+'\', \''+str(nutrCarb)+'\', \''+str(nutrFiber)+'\', \''+str(nutrSugar)+'\', \''+str(nutrProtein)+'\', \''+str(nutrCal)+'\', \''+str(mealRating)+'\'); "; \n'
                                            file.write(sqldata)
                                            print('I just finished writing a meal! Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                                        else:
                                            print('Exception 9 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                                    else:
                                        print('Exception 8 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                                else:
                                    print('Exception 7 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                            else:
                                print('Exception 6 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                        else:
                            print('Exception 5 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                    else:
                        print('Exception 4 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
                else:
                    print('Exception 3 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
            else:
                print('Exception 2 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
        else:
            print('Exception 1 failed. Meal #'+str(itemcount)+'Meal Name:'+name.group(1).decode('ISO-8859-1').replace("'", ""))
    print('I just finished a restaurant')
    print("--- %s seconds ---" % (time.time() - start_time))
    file.write('\n if (!$conn->multi_query($sql)) { echo "Error creating table: " . $conn->error;   } else { echo "it worked"; } $conn->close();?>')
    file.close()