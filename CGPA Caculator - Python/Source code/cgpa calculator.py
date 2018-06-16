from Tkinter import*

window0 = Tk()
window0.title('CGPA CALCULATOR')

grade = {'0':0,'O':10,'A+':9,'A':8 , 'B+':7 , 'B':6 ,'C':5 ,'D':4 ,'E':0,'F':0,'o':10,'a+':9,'a':8 , 'b+':7 , 'b':6 ,'c':5 ,'d':4 ,'e':0,'f':0 }


'''---------------------------------------------------------------------------------------------------------------------------------'''
hf1 = Frame(window0)
f1 = Frame(hf1)
f1.pack()
f2 = Frame(hf1)
f2.pack()
f3 = Frame(hf1)
f3.pack()
f4 = Frame(hf1)
f4.pack(side=LEFT)
f5 = Frame(hf1)
f5.pack()
f6 = Frame(hf1)
f6.pack()
hf1.pack()

c = Canvas(f1,width=700 , height=20 )
line = c.create_line(0,10,700,10 )
c.pack()

l = Label(f2 , text="ENTER THE FOLLOWING DETAILS TO CALCULATE YOUR CGPA" ,bg='#85C1E9' )
l.grid(row=0,column=1)

c = Canvas(f3,width=700 , height=20)
line = c.create_line(0,10,700,10 )
c.pack()


h = Label(f4,text='SEM 1' ,height = 1 , width = 10 ,bg="red")
h.pack()


l = Label(f5,text='SUBJECT',bg='yellow' , width = 17,fg='red' ,relief=RIDGE)
l.grid(row=0 , column=1)
l = Label(f5,text='GRADE',bg='yellow' , width = 17,fg='red' ,relief=RIDGE)
l.grid(row=0 , column=2)
l = Label(f5,text='CREDIT',bg='yellow' , width = 17,fg='red' ,relief=RIDGE)
l.grid(row=0 , column=3)
for i in range(11):
    l=Label(f5,text=(i+1) )
    l.grid(row=i+1 , column=0)
s1e1= Entry(f5 ,borderwidth=1 )
s1e2= Entry(f5,borderwidth=1 )
s1e3= Entry(f5 ,borderwidth=1 )
s1e1.insert(END,'--Enter--')
s1e2.insert(END,'0')
s1e3.insert(END,'0')
s1e1.grid(row=1, column=1 )
s1e2.grid(row=1, column=2 )
s1e3.grid(row=1, column=3 )
s1e4= Entry(f5 ,borderwidth=1 )
s1e5= Entry(f5 ,borderwidth=1 )
s1e6= Entry(f5 ,borderwidth=1 )
s1e4.insert(END,'--Enter--')
s1e5.insert(END,'0')
s1e6.insert(END,'0')
s1e4.grid(row=2, column=1 )
s1e5.grid(row=2, column=2 )
s1e6.grid(row=2, column=3 )
s1e7= Entry(f5 ,borderwidth=1 )
s1e8= Entry(f5 ,borderwidth=1 )
s1e9= Entry(f5 ,borderwidth=1 )
s1e7.insert(END,'--Enter--')
s1e8.insert(END,'0')
s1e9.insert(END,'0')
s1e7.grid(row=3, column=1 )
s1e8.grid(row=3, column=2 )
s1e9.grid(row=3, column=3 )


s1e10= Entry(f5 ,borderwidth=1 )
s1e11= Entry(f5 ,borderwidth=1 )
s1e12= Entry(f5 ,borderwidth=1 )
s1e10.insert(END,'--Enter--')
s1e11.insert(END,'0')
s1e12.insert(END,'0')
s1e10.grid(row=4, column=1 )
s1e11.grid(row=4, column=2 )
s1e12.grid(row=4, column=3 )
s1e13= Entry(f5 ,borderwidth=1 )
s1e14= Entry(f5 ,borderwidth=1 )
s1e15= Entry(f5 ,borderwidth=1 )
s1e13.insert(END,'--Enter--')
s1e14.insert(END,'0')
s1e15.insert(END,'0')
s1e13.grid(row=5, column=1 )
s1e14.grid(row=5, column=2 )
s1e15.grid(row=5, column=3 )
s1e16= Entry(f5 ,borderwidth=1 )
s1e17= Entry(f5 ,borderwidth=1 )
s1e18= Entry(f5 ,borderwidth=1 )
s1e16.insert(END,'--Enter--')
s1e17.insert(END,'0')
s1e18.insert(END,'0')
s1e16.grid(row=6, column=1 )
s1e17.grid(row=6, column=2 )
s1e18.grid(row=6, column=3 )

s1e19= Entry(f5 ,borderwidth=1 )
s1e20= Entry(f5 ,borderwidth=1 )
s1e21= Entry(f5 ,borderwidth=1 )
s1e19.insert(END,'--Enter--')
s1e20.insert(END,'0')
s1e21.insert(END,'0')
s1e19.grid(row=7, column=1 )
s1e20.grid(row=7, column=2 )
s1e21.grid(row=7, column=3 )
s1e22= Entry(f5 ,borderwidth=1 )
s1e23= Entry(f5 ,borderwidth=1 )
s1e24= Entry(f5 ,borderwidth=1 )
s1e22.insert(END,'--Enter--')
s1e23.insert(END,'0')
s1e24.insert(END,'0')
s1e22.grid(row=8, column=1 )
s1e23.grid(row=8, column=2 )
s1e24.grid(row=8, column=3 )
s1e25= Entry(f5 ,borderwidth=1 )
s1e26= Entry(f5 ,borderwidth=1 )
s1e27= Entry(f5 ,borderwidth=1 )
s1e25.insert(END,'--Enter--')
s1e26.insert(END,'0')
s1e27.insert(END,'0')
s1e25.grid(row=9, column=1 )
s1e26.grid(row=9, column=2 )
s1e27.grid(row=9, column=3 )
s1e28= Entry(f5 ,borderwidth=1 )
s1e29= Entry(f5 ,borderwidth=1 )
s1e30= Entry(f5 ,borderwidth=1 )
s1e28.insert(END,'--Enter--')
s1e29.insert(END,'0')
s1e30.insert(END,'0')
s1e28.grid(row=10, column=1 )
s1e29.grid(row=10, column=2 )
s1e30.grid(row=10, column=3 )
s1e31= Entry(f5 ,borderwidth=1 )
s1e32= Entry(f5 ,borderwidth=1 )
s1e33= Entry(f5 ,borderwidth=1 )
s1e31.insert(END,'--Enter--')
s1e32.insert(END,'0')
s1e33.insert(END,'0')
s1e31.grid(row=11, column=1 )
s1e32.grid(row=11, column=2 )
s1e33.grid(row=11, column=3 )







c = Canvas(f6,width=700 , height=20)
line = c.create_line(0,10,700,10 )
c.pack()
'''----------------------------------------------------------------------'''

hf2 = Frame(window0)
f1 = Frame(hf2)
f1.pack()
f2 = Frame(hf2)
f2.pack(side=LEFT)
f5 = Frame(hf2)
f5.pack()
f6 = Frame(hf2)
f6.pack()
hf2.pack()





h = Label(f2,text='SEM 2' ,height = 1 , width = 10 ,bg="red")
h.pack()


l = Label(f5,text='SUBJECT',bg='yellow' , width = 17,fg='red' ,relief=RIDGE )
l.grid(row=0 , column=1)
l = Label(f5,text='GRADE',bg='yellow' , width = 17,fg='red' ,relief=RIDGE )
l.grid(row=0 , column=2)
l = Label(f5,text='CREDIT',bg='yellow' , width = 17,fg='red' , relief=RIDGE )
l.grid(row=0 , column=3)
for i in range(11):
    l=Label(f5,text=(i+1))
    l.grid(row=i+1 , column=0)
s2e1= Entry(f5 ,borderwidth=1 )
s2e2= Entry(f5 ,borderwidth=1 )
s2e3= Entry(f5 ,borderwidth=1 )
s2e1.insert(END,'--Enter--')
s2e2.insert(END,'0')
s2e3.insert(END,'0')
s2e1.grid(row=1, column=1 )
s2e2.grid(row=1, column=2 )
s2e3.grid(row=1, column=3 )
s2e4= Entry(f5 ,borderwidth=1 )
s2e5= Entry(f5 ,borderwidth=1 )
s2e6= Entry(f5 ,borderwidth=1 )
s2e4.insert(END,'--Enter--')
s2e5.insert(END,'0')
s2e6.insert(END,'0')
s2e4.grid(row=2, column=1 )
s2e5.grid(row=2, column=2 )
s2e6.grid(row=2, column=3 )
s2e7= Entry(f5 ,borderwidth=1 )
s2e8= Entry(f5 ,borderwidth=1 )
s2e9= Entry(f5 ,borderwidth=1 )
s2e7.insert(END,'--Enter--')
s2e8.insert(END,'0')
s2e9.insert(END,'0')
s2e7.grid(row=3, column=1 )
s2e8.grid(row=3, column=2 )
s2e9.grid(row=3, column=3 )


s2e10= Entry(f5 ,borderwidth=1 )
s2e11= Entry(f5 ,borderwidth=1 )
s2e12= Entry(f5 ,borderwidth=1 )
s2e10.insert(END,'--Enter--')
s2e11.insert(END,'0')
s2e12.insert(END,'0')
s2e10.grid(row=4, column=1 )
s2e11.grid(row=4, column=2 )
s2e12.grid(row=4, column=3 )
s2e13= Entry(f5 ,borderwidth=1 )
s2e14= Entry(f5 ,borderwidth=1 )
s2e15= Entry(f5 ,borderwidth=1 )
s2e13.insert(END,'--Enter--')
s2e14.insert(END,'0')
s2e15.insert(END,'0')
s2e13.grid(row=5, column=1 )
s2e14.grid(row=5, column=2 )
s2e15.grid(row=5, column=3 )
s2e16= Entry(f5 ,borderwidth=1 )
s2e17= Entry(f5 ,borderwidth=1 )
s2e18= Entry(f5 ,borderwidth=1 )
s2e16.insert(END,'--Enter--')
s2e17.insert(END,'0')
s2e18.insert(END,'0')
s2e16.grid(row=6, column=1 )
s2e17.grid(row=6, column=2 )
s2e18.grid(row=6, column=3 )

s2e19= Entry(f5 ,borderwidth=1 )
s2e20= Entry(f5 ,borderwidth=1 )
s2e21= Entry(f5 ,borderwidth=1 )
s2e19.insert(END,'--Enter--')
s2e20.insert(END,'0')
s2e21.insert(END,'0')
s2e19.grid(row=7, column=1 )
s2e20.grid(row=7, column=2 )
s2e21.grid(row=7, column=3 )
s2e22= Entry(f5 ,borderwidth=1 )
s2e23= Entry(f5 ,borderwidth=1 )
s2e24= Entry(f5 ,borderwidth=1 )
s2e22.insert(END,'--Enter--')
s2e23.insert(END,'0')
s2e24.insert(END,'0')
s2e22.grid(row=8, column=1 )
s2e23.grid(row=8, column=2 )
s2e24.grid(row=8, column=3 )
s2e25= Entry(f5 ,borderwidth=1 )
s2e26= Entry(f5 ,borderwidth=1 )
s2e27= Entry(f5 ,borderwidth=1 )
s2e25.insert(END,'--Enter--')
s2e26.insert(END,'0')
s2e27.insert(END,'0')
s2e25.grid(row=9, column=1 )
s2e26.grid(row=9, column=2 )
s2e27.grid(row=9, column=3 )
s2e28= Entry(f5 ,borderwidth=1 )
s2e29= Entry(f5 ,borderwidth=1 )
s2e30= Entry(f5 ,borderwidth=1 )
s2e28.insert(END,'--Enter--')
s2e29.insert(END,'0')
s2e30.insert(END,'0')
s2e28.grid(row=10, column=1 )
s2e29.grid(row=10, column=2 )
s2e30.grid(row=10, column=3 )
s2e31= Entry(f5 ,borderwidth=1 )
s2e32= Entry(f5 ,borderwidth=1 )
s2e33= Entry(f5 ,borderwidth=1 )
s2e31.insert(END,'--Enter--')
s2e32.insert(END,'0')
s2e33.insert(END,'0')
s2e31.grid(row=11, column=1 )
s2e32.grid(row=11, column=2 )
s2e33.grid(row=11, column=3 )



c = Canvas(f6,width=700 , height=20)
line = c.create_line(0,10,700,10 )
c.pack()

'''------------------------------------------------call to result-------------------------------------------------------------------------'''
def clkresult():

    '''---------------------------------------------------------result calculation ---------------------------------------------------------'''

    s1fac = float( int(s1e3.get()) + int(s1e6.get()) + int(s1e9.get()) + int(s1e12.get()) + int(s1e15.get()) + int(s1e18.get()) + int(s1e21.get()) + int(s1e24.get()) + int(s1e27.get()) + int(s1e30.get()) + int(s1e33.get())  )
    if s1fac == 0 :
        effs1fac = 1
    else:
        effs1fac = s1fac
    s1tgpa = (((grade[s1e2.get()])*(int(s1e3.get())) + (grade[s1e5.get()])*(int(s1e6.get())) + (grade[s1e8.get()])*(int(s1e9.get())) + (grade[s1e11.get()])*(int(s1e12.get())) + (grade[s1e14.get()])*(int(s1e15.get())) + (grade[s1e17.get()])*(int(s1e18.get()))  +  (grade[s1e20.get()])*(int(s1e21.get())) + (grade[s1e23.get()])*(int(s1e24.get())) + (grade[s1e26.get()])*(int(s1e27.get()))  +  (grade[s1e29.get()])*(int(s1e30.get())) + (grade[s1e32.get()])*(int(s1e33.get())))/effs1fac)



    s2fac = float( int(s2e3.get()) + int(s2e6.get()) + int(s2e9.get()) + int(s2e12.get()) + int(s2e15.get()) + int(s2e18.get()) + int(s2e21.get()) + int(s2e24.get()) + int(s2e27.get()) + int(s2e30.get()) + int(s2e33.get()) )
    if s2fac == 0 :
        effs2fac = 1
    else:
        effs2fac = s2fac
    s2tgpa = (((grade[s2e2.get()])*(int(s2e3.get())) + (grade[s2e5.get()])*(int(s2e6.get())) + (grade[s2e8.get()])*(int(s2e9.get())) + (grade[s2e11.get()])*(int(s2e12.get())) + (grade[s2e14.get()])*(int(s2e15.get())) + (grade[s2e17.get()])*(int(s2e18.get()))  +  (grade[s2e20.get()])*(int(s2e21.get())) + (grade[s2e23.get()])*(int(s2e24.get())) + (grade[s2e26.get()])*(int(s2e27.get())) + (grade[s2e29.get()])*(int(s2e30.get())) + (grade[s2e32.get()])*(int(s2e33.get())) )/effs2fac)




    if s2tgpa == 0 :
        cgpa = s1tgpa
    elif s1tgpa == 0:
        cgpa = s2tgpa
    else:
        cgpa = ((s1tgpa + s2tgpa)/2)












    '''--------------------------------------------------result calcultaion end ----------------------------------------------------------------'''

    window = Tk()
    window.title("CGPA Result")
    
    hf1 = Frame(window)
    f1 = Frame(hf1)
    f1.pack()
    n1= Frame(hf1)
    n1.pack()
    n2= Frame(hf1)
    n2.pack()
    n3= Frame(hf1)
    n3.pack()
    f2 = Frame(hf1)
    f2.pack()
    hf1.pack()

    c1 = Canvas(f1,width=1100 , height=20)
    line1 = c1.create_line(0,10,1100,10 )
    c1.pack()

    l = Label(n1,text='RESULT' ,height = 1 , width = 60 ,bg='cyan')
    l.pack()


    c1 = Canvas(n2,width=1100 , height=20)
    line1 = c1.create_line(0,10,1100,10 )
    c1.pack()


    l = Label(f2,text='SEM 1' ,height = 1 , width = 12 ,bg='red')
    l.grid(row = 0 , column = 0)

    
    l = Label(f2,text='       ' ,height = 1 , width = 20 )
    l.grid(row = 1 , column = 1)

    for i in range(11):
        l = Label(f2,text=(i+1) ,height = 1 , width = 1 )
        l.grid(row = (i+2) , column = 2)




    l = Label(f2, text='SUBJECT'  , height = 1 , width=30 ,relief=GROOVE  , bg='#cc9900')
    l.grid(row=1 , column=3)
    l = Label(f2,text='GRADE', height = 1 , width = 17 ,relief=GROOVE , bg='#cc9900')
    l.grid(row=1 , column=4)
    l = Label(f2,text='CREDIT',height = 1 , width = 17 ,relief=GROOVE , bg='#cc9900')
    l.grid(row=1 , column=5)


    l = Label(f2, text=(s1e1.get()).upper()  , height = 1 , width=30  , relief=GROOVE ,fg='blue'  )
    l.grid(row=2 , column=3)
    l = Label(f2,text=(s1e2.get()).upper(), height = 1 , width = 17 ,relief=GROOVE, fg='red' )
    l.grid(row=2 , column=4)
    l = Label(f2,text=s1e3.get(),height = 1 , width = 17 ,relief=GROOVE  )
    l.grid(row=2 , column=5)
    
    l = Label(f2, text=(s1e4.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=3 , column=3)
    l = Label(f2,text=(s1e5.get()).upper(), height = 1 , width = 17 ,relief=GROOVE , fg='red' )
    l.grid(row=3 , column=4)
    l = Label(f2,text=s1e6.get(),height = 1 , width = 17 ,relief=GROOVE)
    l.grid(row=3 , column=5)

    l = Label(f2, text=(s1e7.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=4 , column=3)
    l = Label(f2,text=(s1e8.get()).upper(), height = 1 , width = 17 ,relief=GROOVE , fg='red')
    l.grid(row=4 , column=4)
    l = Label(f2,text=s1e9.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=4 , column=5)

    l = Label(f2, text=(s1e10.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=5 , column=3)
    l = Label(f2,text=(s1e11.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=5 , column=4)
    l = Label(f2,text=s1e12.get(),height = 1 , width = 17 , relief=GROOVE )
    l.grid(row=5 , column=5)

    l = Label(f2, text=(s1e13.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue' )
    l.grid(row=6 , column=3)
    l = Label(f2,text=(s1e14.get()).upper(), height = 1 , width = 17 ,relief=GROOVE , fg='red')
    l.grid(row=6 , column=4)
    l = Label(f2,text=s1e15.get(),height = 1 , width = 17 ,relief=GROOVE )
    l.grid(row=6 , column=5)

    l = Label(f2, text=(s1e16.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue' )
    l.grid(row=7 , column=3)
    l = Label(f2,text=(s1e17.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=7 , column=4)
    l = Label(f2,text=s1e18.get(),height = 1 , width = 17 ,relief=GROOVE )
    l.grid(row=7 , column=5)

    l = Label(f2, text=(s1e19.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue' )
    l.grid(row=8 , column=3)
    l = Label(f2,text=(s1e20.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=8 , column=4)
    l = Label(f2,text=s1e21.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=8 , column=5)

    l = Label(f2, text=(s1e22.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=9 , column=3)
    l = Label(f2,text=(s1e23.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=9 , column=4)
    l = Label(f2,text=s1e24.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=9 , column=5)

    l = Label(f2, text=(s1e25.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=10 , column=3)
    l = Label(f2,text=(s1e26.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=10 , column=4)
    l = Label(f2,text=s1e27.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=10 , column=5)

    l = Label(f2, text=(s1e28.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=11 , column=3)
    l = Label(f2,text=(s1e29.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=11 , column=4)
    l = Label(f2,text=s1e30.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=11 , column=5)

    l = Label(f2, text=(s1e31.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=12 , column=3)
    l = Label(f2,text=(s1e32.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=12 , column=4)
    l = Label(f2,text=s1e33.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=12 , column=5)










    l = Label(f2,text='     ' ,height = 1 , width = 17 )
    l.grid(row=4 , column=6)
    l = Label(f2,text='TGPA' ,height = 1 , width = 17 ,relief=GROOVE ,bg='#cc9900')
    l.grid(row=4 , column=7)
    if s1tgpa < 6 :
        t1gpac = 'red'
    else:
        t1gpac = 'green'
    l = Label(f2,text=("%.2f" % round(s1tgpa,2)) ,height = 1 , width = 17 ,relief=RIDGE , bg='white' , fg = t1gpac)
    l.grid(row=5 , column=7)



    '''----------------------------------------------------------------------------------------------------------------'''


    hf2 = Frame(window)
    f1 = Frame(hf2)
    f1.pack()
    f2 = Frame(hf2)
    f2.pack()
    f3 = Frame(hf2)
    f3.pack()
    f4 = Frame(hf2)
    f4.pack()
    f5 = Frame(hf2)
    f5.pack()
    hf2.pack()

    c1 = Canvas(f1,width=1100 , height=20)
    line1 = c1.create_line(0,15,1100,15 )
    c1.pack()
    
    l = Label(f2,text='SEM 2' ,height = 1 , width = 12 ,bg='red')
    l.grid(row = 0 , column = 0)

    
    l = Label(f2,text='       ' ,height = 1 , width = 20 )
    l.grid(row = 1 , column = 1)

    for i in range(11):
        l = Label(f2,text=(i+1) ,height = 1 , width = 1 )
        l.grid(row = (i+2) , column = 2)




    l = Label(f2, text='SUBJECT'  , height = 1 , width=30 ,relief=GROOVE  , bg='#cc9900')
    l.grid(row=1 , column=3)
    l = Label(f2,text='GRADE', height = 1 , width = 17 ,relief=GROOVE , bg='#cc9900')
    l.grid(row=1 , column=4)
    l = Label(f2,text='CREDIT',height = 1 , width = 17 ,relief=GROOVE , bg='#cc9900')
    l.grid(row=1 , column=5)


    l = Label(f2, text=(s2e1.get()).upper()  , height = 1 , width=30  , relief=GROOVE ,fg='blue'  )
    l.grid(row=2 , column=3)
    l = Label(f2,text=(s2e2.get()).upper(), height = 1 , width = 17 ,relief=GROOVE, fg='red' )
    l.grid(row=2 , column=4)
    l = Label(f2,text=s2e3.get(),height = 1 , width = 17 ,relief=GROOVE  )
    l.grid(row=2 , column=5)
    
    l = Label(f2, text=(s2e4.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=3 , column=3)
    l = Label(f2,text=(s2e5.get()).upper(), height = 1 , width = 17 ,relief=GROOVE , fg='red' )
    l.grid(row=3 , column=4)
    l = Label(f2,text=s2e6.get(),height = 1 , width = 17 ,relief=GROOVE)
    l.grid(row=3 , column=5)

    l = Label(f2, text=(s2e7.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=4 , column=3)
    l = Label(f2,text=(s2e8.get()).upper(), height = 1 , width = 17 ,relief=GROOVE , fg='red')
    l.grid(row=4 , column=4)
    l = Label(f2,text=s2e9.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=4 , column=5)

    l = Label(f2, text=(s2e10.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=5 , column=3)
    l = Label(f2,text=(s2e11.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=5 , column=4)
    l = Label(f2,text=s2e12.get(),height = 1 , width = 17 , relief=GROOVE )
    l.grid(row=5 , column=5)

    l = Label(f2, text=(s2e13.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue' )
    l.grid(row=6 , column=3)
    l = Label(f2,text=(s2e14.get()).upper(), height = 1 , width = 17 ,relief=GROOVE , fg='red')
    l.grid(row=6 , column=4)
    l = Label(f2,text=s2e15.get(),height = 1 , width = 17 ,relief=GROOVE )
    l.grid(row=6 , column=5)

    l = Label(f2, text=(s2e16.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue' )
    l.grid(row=7 , column=3)
    l = Label(f2,text=(s2e17.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=7 , column=4)
    l = Label(f2,text=s2e18.get(),height = 1 , width = 17 ,relief=GROOVE )
    l.grid(row=7 , column=5)

    l = Label(f2, text=(s2e19.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue' )
    l.grid(row=8 , column=3)
    l = Label(f2,text=(s2e20.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=8 , column=4)
    l = Label(f2,text=s2e21.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=8 , column=5)

    l = Label(f2, text=(s2e22.get()).upper() , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=9 , column=3)
    l = Label(f2,text=(s2e23.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=9 , column=4)
    l = Label(f2,text=s2e24.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=9 , column=5)

    l = Label(f2, text=(s2e25.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=10 , column=3)
    l = Label(f2,text=(s2e26.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=10 , column=4)
    l = Label(f2,text=s2e27.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=10 , column=5)

    l = Label(f2, text=(s2e28.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=11 , column=3)
    l = Label(f2,text=(s2e29.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=11 , column=4)
    l = Label(f2,text=s2e30.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=11 , column=5)

    l = Label(f2, text=(s2e31.get()).upper()  , height = 1 , width=30 ,relief=GROOVE , fg='blue')
    l.grid(row=12 , column=3)
    l = Label(f2,text=(s2e32.get()).upper(), height = 1 , width = 17 , relief=GROOVE , fg='red')
    l.grid(row=12 , column=4)
    l = Label(f2,text=s2e33.get(),height = 1 , width = 17 , relief=GROOVE)
    l.grid(row=12 , column=5)












    l = Label(f2,text='     ' ,height = 1 , width = 17 )
    l.grid(row=4 , column=6)
    l = Label(f2,text='TGPA' ,height = 1 , width = 17 ,relief=GROOVE ,bg='#cc9900')
    l.grid(row=4 , column=7)
    if s2tgpa < 6 :
        t2gpac = 'red'
    else:
        t2gpac = 'green'
    l = Label(f2,text=("%.2f" % round(s2tgpa,2)) ,height = 1 , width = 17 ,relief=RIDGE , bg='white' , fg = t2gpac)
    l.grid(row=5 , column=7)

    c1 = Canvas(f3,width=1100 , height=20)
    line1 = c1.create_line(0,15,1100,15 )
    c1.pack()

    l = Label(f4,text="RESULT : " ,height = 1 ,width=20, relief=GROOVE , bg='red')
    l.grid(column=0)

    if cgpa == 0 :
        cgpac = 'red'
        status = "Please Enter The Values of Grades , Credit And Subject"
    elif cgpa <= 5 :
        cgpac = 'red'
        status = "Don't worry , Just  Try Again, You can Do Better "
    elif 5 < cgpa <= 7 :
        cgpac = 'green'
        status = "Congratulation! Keep It Up "
    elif 7 < cgpa <= 9:
        cgpac = 'green'
        status = "Congratulation! Keep On Rising"
    else:
        cgpac = 'green'
        status = "Congratulation! 'Reaching the Top is not Success , Staying there Is "
        

    l = Label(f4,text=status ,height = 1 ,width=80, font='bold' , fg=cgpac)
    l.grid(row=0 , column=1)  

 
    l = Label(f4,text='CGPA' ,height = 1 , width = 20 ,relief=GROOVE , bg='#cc9900')
    l.grid(row=0 , column=2)


     
    l = Label(f4,text=("%.2f" % round(cgpa,2)) ,height = 1 , width = 20 ,relief=RIDGE , bg='white' , fg = cgpac)
    l.grid(row=1 , column=2)


    c1 = Canvas(f5,width=1100 , height=20 )
    line1 = c1.create_line(0,15,1100,15 )
    c1.pack()
    
    



'''------------------------------------------------------/end result-----------------------------------------------------------------------'''

b = Button(f6 , text="Calculate CGPA & TGPA" , height=2 , width=20 ,bg='#0099cc',fg='white' ,activebackground='#5ff4dc' ,command=clkresult)
b.pack()


window0.mainloop()
