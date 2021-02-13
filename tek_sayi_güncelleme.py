n=int (input("Kaç sayı girilecek: "))
b=[]
for i in range (0,n):
    a=int (input("Sayı: "))
    b.append(a)
c=[]
d=[]
for i in b:
    if(i%2==0):
        c.append(i)
    else:
        d.append(i)
d.sort()
count2=0
for j in d:
    count2=count2+1
print("En büyük tek sayı: ",d[count2-1])
