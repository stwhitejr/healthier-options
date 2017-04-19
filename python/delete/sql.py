restaurantname = 'test'
mealName = '1'
nutrFat = '1'
nutrSatFat = '1'
nutrChol = '1'
nutrSodium = '1'
nutrCarb = '1'
nutrFiber = '1'
nutrSugar = '1'
nutrProtein = '1'
nutrCal = '1'

tablefile = open('U:\\python\\py-sql_tables.php', 'a')
sqltable = '\n $sql .= "CREATE TABLE '+restaurantname+' (`restName` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT \''+restaurantname+'\', `High Protein` int(1) DEFAULT \'0\',	  `Gluten Free` tinyint(1) DEFAULT \'0\', `Low Calorie` tinyint(1) DEFAULT \'0\', `Low Carbs` tinyint(1) DEFAULT \'0\',`mealName` varchar(50) COLLATE latin1_general_ci NOT NULL, `mealDesc` varchar(100) COLLATE latin1_general_ci DEFAULT NULL, `nutrFat` int(11), `nutrSatFat` int(11), `nutrChol` int(11), `nutrSodium` int(11), `nutrCarb` int(11), `nutrFiber` int(11), `nutrSugar` int(11), `nutrProtein` int(11), `nutrCal` int(11), `mealRating` int(11) DEFAULT NULL, `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)"; \n'
tablefile.write(sqltable)

sqldata = '\n $sql .= "INSERT INTO '+restaurantname+' (restName, `High Protein`, `Low Calorie`, `Low Carbs`, mealName, mealDesc, nutrFat, nutrSatFat, nutrChol, nutrSodium, nutrCarb, nutrFiber, nutrSugar, nutrProtein, nutrCal, mealRating) VALUES (\''+mealName+'\', \''+nutrFat+'\', \''+nutrSatFat+'\', \''+nutrChol+'\', \''+nutrSodium+'\', \''+nutrCarb+'\', \''+nutrFiber+'\', \''+nutrSugar+'\', \''+nutrProtein+'\', \''+nutrCal+'\')"; \n'
tablefile.write(sqldata)

#if nutr data doesn't exist return null so we don't have to modify the sql insert
#i think we can removed the escaped 's

