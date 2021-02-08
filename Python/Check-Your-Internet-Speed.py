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
