import speedtest
st = speedtest.Speedtest()
option = int(input(''' What Speed Do You Wan't to Test : 
 1) Download Speed
 2) Upload Speed
 3) Ping                   
 Your Choice :  '''))
if option == 1:
    print(st.download(), 'b/s')
elif option == 2:
    print(st.upload(), 'b/s')
elif option == 3:
    servernames =[]
    st.get_servers(servernames)
    print(st.results.ping, 'b/s')
else:
    print("Please Enter the Correct Choice :  ")

  """ ________________________________________________________________________________________________________________________________________________________
  runfile('C:/Users/Sumit/Desktop/Python Bootcamp/Python/Check Your Internet Speed.py', wdir='C:/Users/Sumit/Desktop/Python Bootcamp/Python')

 What Speed Do You Wan't to Test : 
 1) Download Speed
 2) Upload Speed
 3) Ping                   
 Your Choice :  1
629876.2959293812 b/s

 What Speed Do You Wan't to Test : 
 1) Download Speed
 2) Upload Speed
 3) Ping                   
 Your Choice :  2
5890753.938074739 b/s

 What Speed Do You Wan't to Test : 
 1) Download Speed
 2) Upload Speed
 3) Ping                   
 Your Choice :  3
0 b/s
"""
