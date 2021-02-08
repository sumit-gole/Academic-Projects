#COPYRIGHT BY @SUMIT GOLE - Hey Don't Smarter Than Me Ok.. I will Catch Everything If You Copied My Code..
import random
def hangman():

    word = random.choice(["avengers" , "hangmen" , "tiger" , "superman" , "thor" , "pokemon" , "earth" , "titanic", "indian", "spiderman" ])
    validLetters = 'abcdefghijklmnopqrstuvwxyz'
    turns = 10
    guessmade = ''

    while len(word) > 0:
        main = ""
        missed = 0

        for letter in word:
            if letter in guessmade:
                main = main + letter
            else:
                main = main + "_" + " "
        if main == word:
            print(main)
            print("You Win..!!")
            break

        print("Guess The Word :  " , main)
        guess = input()

        if guess in validLetters:
            guessmade = guessmade + guess
        else:
            print("Enter a Valid Character :  ")
            guess = input()

        if guess not in word:
            turns = turns - 1
            if turns == 9:
                print("9 Turns Left..")
                print("  --------  ")
            if turns == 8:
                print("8 Turns Left..")
                print("  --------  ")
                print("     O      ")
            if turns == 7:
                print("7 Turns Left..")
                print("  --------  ")
                print("     O      ")
                print("     |      ")
            if turns == 6:
                print("6 Turns Left..")
                print("  --------  ")
                print("     O      ")
                print("     |      ")
                print("    /       ")
            if turns == 5:
                print("5 Turns Left..")
                print("  --------  ")
                print("     O      ")
                print("     |      ")
                print("    / \     ")
            if turns == 4:
                print("4 Turns Left..")
                print("  --------  ")
                print("   \ O      ")
                print("     |      ")
                print("    / \     ")
            if turns == 3:
                print("3 Turns Left..")
                print("  --------  ")
                print("   \ O /    ")
                print("     |      ")
                print("    / \     ")
            if turns == 2:
                print("2 Turns Left..")
                print("  --------  ")
                print("   \ O /|   ")
                print("     |      ")
                print("    / \     ")
            if turns == 1:
                print("1 Turns Left..")
                print("Last Breaths Counting, Take Care..!!")
                print("  --------  ")
                print("   \ O_|/   ")
                print("     |      ")
                print("    / \     ")
            if turns == 0:
                print("You Loose..")
                print("You Let a Kind Man Die..!!")
                print("  --------  ")
                print("     O_|    ")
                print("    /|\      ")
                print("    / \     ")
                break

name = input("Enter Your Name :  ")
print("WELCOME " , name )
print("-------------------")
print("Try To Guess The Word in Less Than 10 Attempts..!!")
hangman()
print()
