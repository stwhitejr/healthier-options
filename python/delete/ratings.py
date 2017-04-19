#fake meal
nutrCal = 400
nutrProtein = 40
nutrCarbs = 40
nutrFat = 20
nutrSodium = 100
nutrFiber = 4
nutrSatFat = 2

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
if nutrCal * .10 <= nutrProtein:    #40% of the meal is ideal for protein. .10 * 4 = 40%. However, more protein the better!
    proteinRating = 7
    mealDesc += 'Amazing protein to calorie ratio! '
elif nutrCal * .09 <= nutrProtein:
    proteinRating = 6
elif nutrCal * .08 <= nutrProtein:
    proteinRating = 5
    mealDesc += 'Great protein to calorie ratio! '
elif nutrCal * .07 <= nutrProtein:
    proteinRating = 4
elif nutrCal * .06 <= nutrProtein:
    proteinRating = 3
    mealDesc += 'Good protein to calorie ratio. '
elif nutrCal * .05 <= nutrProtein:
    proteinRating = 2
    mealDesc += 'Not a good protein to calorie ratio. '
elif nutrCal * .04 <= nutrProtein:
    proteinRating = 1
elif nutrCal * .02 <= nutrProtein:
    proteinRating = -1
elif nutrCal * .01 <= nutrProtein:
    proteinRating = -2
elif nutrProtein == 0:
    proteinRating = -3

#Calorie rating
if nutrCal <= 200:
    calorieRating = 7
    mealDesc += 'Calories so low this is a borderline snack. '
elif nutrCal <= 300:
    calorieRating = 6
elif nutrCal <= 400:
    calorieRating = 5
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
if nutrCal * .068 <= nutrFat:
    fatRating = -3
    mealDesc += 'Very high percentage of fat. '
elif nutrCal * .058 <= nutrFat:
    fatRating = -2
    mealDesc += 'Fat percentage is high. '
elif nutrCal * .048 <= nutrFat:
    fatRating = -1
    mealDesc += 'Fat percentage is a bit high. '
elif nutrCal * .047 <= nutrFat:
    fatRating = 1
elif nutrCal * .043 <= nutrFat:
    fatRating = 2
    mealDesc += 'Fat percentage is on the low side. '
elif nutrCal * .038 <= nutrFat:
    fatRating = 3
    mealDesc += 'Fat percentage isn\'t bad. '
elif nutrCal * .032 <= nutrFat:
    fatRating = 4
    mealDesc += 'Fat percentage is good. '
elif nutrCal * .0287 <= nutrFat:  #20% of the meal is ideal for fat. .0287 * 7 = 20%~
    fatRating = 5
    mealDesc += 'Fat percentage is perfect! '
elif nutrCal * .022 <= nutrFat:  #Anything below 15%~ we stop giving a rating
    fatRating = 0

#Carb rating
if nutrCal * .15 <= nutrCarbs:
    carbRating = -3
    mealDesc += 'Carbohdryate percentage is high. '
elif nutrCal * .14 <= nutrCarbs:
    carbRating = -2
    mealDesc += 'Lots of carbohdyrates. '
elif nutrCal * .13 <= nutrCarbs:
    carbRating = -1
    mealDesc += 'Carbohdryate percentage is a little high. '
elif nutrCal * .12 <= nutrCarbs:
    carbRating = 1
elif nutrCal * .11 <= nutrCarbs:
    carbRating = 2
    mealDesc += 'Carbohdryate percentage isn\'t bad. '
elif nutrCal * .10 <= nutrCarbs:
    carbRating = 3
elif nutrCal * .09 <= nutrCarbs:
    carbRating = 4
    mealDesc += 'Carbohdryate percentage is good. '
elif nutrCal * .08 <= nutrCarbs:  #40% of the meal is ideal for carbs. .10 * 4 = 40%.
    carbRating = 5
    mealDesc += 'Carbohdryate percentage is great! '
else:
    carbRating = 0

#LowCarb rating
if nutrCarbs == 0:
    lowCarbRating = 5
elif nutrCarbs <= 5:
    lowCarbRating = 4
elif nutrCarbs <= 10:
    lowCarbRating = 3
elif nutrCarbs <= 15:
    lowCarbRating = 2
elif nutrCarbs < 20:
    lowCarbRating = 1
else:
    lowCarbRating = 0

#Sat Fat rating
if nutrSatFat == 0:
    satfatRating = 4
elif nutrSatFat <= 2:
    satfatRating = 3
elif nutrSatFat <= 4:
    satfatRating = 2
elif nutrSatFat <= 6:
    satfatRating = 1
elif nutrSatFat <= 8:
    satfatRating = -1
elif nutrSatFat <= 11:
    satfatRating = -2
elif nutrSatFat >= 15:
    satfatRating = -3
    mealDesc += 'High in saturated fat! '

#Sodium rating
if nutrSodium <= 200:
    sodiumRating = 2
    mealDesc += 'Low in sodium. '
elif nutrSodium <= 500:
    sodiumRating = 1
elif nutrSodium >= 1500:
    sodiumRating = -2
    mealDesc += 'Very high in sodium! '
elif nutrSodium >= 1000:
    sodiumRating = -1
    mealDesc += 'High in sodium. '

#Fiber rating
if nutrFiber >= 5:
    fiberRating = 3
    mealDesc += 'High in fiber. '
elif nutrFiber >= 2:
    fiberRating = 1
    mealDesc += 'Some fiber is better than none. '
elif nutrFiber == 0 & nutrCarbs >= 20:
    fiberRating = -1

#add up overall rating
mealRating = proteinRating + calorieRating + satfatRating + sodiumRating + fiberRating + carbRating + fatRating

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

print('meal rating:'+mealRating+' Protein Rating:'+proteinRating)