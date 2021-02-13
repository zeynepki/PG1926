sayilar = input("Sayılar: ")
a = sayilar.split(" ")
liste = []
liste2 = []
for i in a:
    if i =="0":
        liste.append(i)
    else:
        liste2.append(i)
pri = liste + liste2
print(pri)
