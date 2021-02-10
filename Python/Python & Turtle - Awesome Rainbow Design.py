#COPYRIGHT BY @SUMIT GOLE - Hey Don't Smarter Than Me Ok.. I will Catch Everything If You Copied My Code..
from turtle import *
speed(200)
bgcolor('black')
r,g,b = 255,0,0
for i in range(255*2):
    colormode(255)
    if i<255//3:
        g+=3
    elif i<255*2//3:
        r-=3
    elif i<255:
        b+=3
    elif i<255*4//3:
        g-=3
    elif i<255*5//3:
        r+=3
    else:
        b-=3
    fd(50+i)
    rt(91)
    pencolor(r,g,b)
