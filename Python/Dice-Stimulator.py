#COPYRIGHT BY @SUMIT GOLE - Hey Don't Smarter Than Me Ok.. I will Catch Everything If You Copied My Code..
import random
print("This is a Dice Stimulator..")
x = "y"

while x == "y" or x=="Y":
    number = random.randint(1,6)

    if number == 1:
        print("---------")
        print("|       |")
        print("|   O   |")
        print("|       |")
        print("---------")
    if number == 2:
        print("----------")
        print("|        |")
        print("| O    O |")
        print("|        |")
        print("----------")
    if number == 3:
        print("----------")
        print("|    O   |")
        print("|    O   |")
        print("|    O   |")
        print("----------")
    if number == 4:
        print("----------")
        print("| O    O |")
        print("|        |")
        print("| O    O |")
        print("----------")
    if number == 5:
        print("---------")
        print("| O   O |")
        print("|   O   |")
        print("| O   O |")
        print("---------")
    if number == 6:
        print("----------")
        print("| O    O |")
        print("| O    O |")
        print("| O    O |")
        print("----------")
    print("Press N For Exit  ")
    x = input("Press Y To Roll Again :  ")
    
while x=="n" or x=="N":
    print("\nThank You For Playing..")
    break
