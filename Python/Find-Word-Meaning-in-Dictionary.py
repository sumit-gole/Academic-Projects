#COPYRIGHT BY @SUMIT GOLE - Hey Don't Smarter Than Me Ok.. I will Catch Everything If You Copied My Code..
import json
from difflib import get_close_matches

data = json.load(open("data.json"))

def translate(word):
    word = word.lower()
    if word in data:
        return data[word]
    elif word.title() in data:
        return data[word.title()]
    elif word.upper() in data:
        return data[word.upper()]
    elif len(get_close_matches(word , data.keys())) > 0 :
        print("Did You Mean %s Instead" %get_close_matches(word, data.keys())[0])
        decide = input("Press y For Yes or n For No :  ")
        if decide == "y" or decide == "Y":
            return data[get_close_matches(word , data.keys())[0]]
        elif decide == "n" or decide == "N":
            return("Pugger Your Paw Steps on Wrong Keys..!! ")
        else:
            return("You Have Entered Wrong Input Please Enter Just y or n..!!")
    else:
        print("Pugger Your PawSsteps on Wrong Keys..!! ")

word = input("Enter The Word You Wan't To Search :  ")
output = translate(word)
if type(output) == list:
    for item in output:
        print(item)
else:
    print(output)
