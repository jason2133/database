file_name = input("파일이름 : ")

file_name_ext = file_name+'.php'

file = open(file_name_ext, 'r', encoding='utf-8')
rows = file.readlines()

num = 1
data = ''
for row in rows:
    print(row, end='')
    data += '%02d    ' % num + row
    num += 1

file.close()

file_name = '_'+file_name+'.php'
file = open(file_name, 'w', encoding='utf-8')
file.write(data)

file.close()



