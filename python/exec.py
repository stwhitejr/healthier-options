Python 3.4.3 (v3.4.3:9b73f1c3e601, Feb 24 2015, 22:43:06) [MSC v.1600 32 bit (Intel)] on win32
Type "copyright", "credits" or "license()" for more information.
>>> exec(compile('C:\Users\Steve\Desktop\pythron\caloriecount').read())
SyntaxError: (unicode error) 'unicodeescape' codec can't decode bytes in position 2-3: truncated \UXXXXXXXX escape
>>> exec(compile('C:\\Users\\Steve\\Desktop\\pythron\\caloriecount').read())
Traceback (most recent call last):
  File "<pyshell#1>", line 1, in <module>
    exec(compile('C:\\Users\\Steve\\Desktop\\pythron\\caloriecount').read())
TypeError: Required argument 'filename' (pos 2) not found
>>> exec(compile('C:\\Users\Steve\Desktop\pythron\caloriecount').read())
Traceback (most recent call last):
  File "<pyshell#2>", line 1, in <module>
    exec(compile('C:\\Users\Steve\Desktop\pythron\caloriecount').read())
TypeError: Required argument 'filename' (pos 2) not found
>>> exec(open('C:\\Users\Steve\Desktop\pythron\caloriecount').read())
Traceback (most recent call last):
  File "<pyshell#3>", line 1, in <module>
    exec(open('C:\\Users\Steve\Desktop\pythron\caloriecount').read())
  File "<string>", line 12, in <module>
NameError: name 'htmltext' is not defined
>>> 
