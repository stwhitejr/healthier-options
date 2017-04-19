mainfile = open('U:\\python\\test.html', 'r')
mainfiletext = mainfile.read()
compiledtext = mainfiletext

subpages = ['U:\\python\\test-1.html', 'U:\\python\\test-2.html', 'U:\\python\\test-3.html'] #change these to restaurant variable
for item in subpages:
	subpagefile = open(item) #change this with a urlrequest. Make sure there is a delay between each of these requests
	subpagetext = subpagefile.read()
	if subpagetext != mainfiletext:
		compiledtext += subpagetext
	else:
		print('No more subpages!')
print(compiledtext)