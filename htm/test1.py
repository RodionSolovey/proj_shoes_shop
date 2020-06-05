#!\Python\python.exe
import cx_Oracle,json,sys
#загрузка инфы с файла в виде массива с помощью джейсона
#filename = 'nums.json'
#with open (filename) as f:
#	nums= json.load(f)
nums= sys.argv[1]
nums = nums.split(',')
#конектимся к базе
myconnection =cx_Oracle.connect('SHOES', 'SHOES', '//localhost:1521/xe', encoding='utf8', nencoding='utf8')
mycursor = myconnection.cursor()
#делаем выборку по всей базе товаров, с интересующими нас значениями айди и под айди
mycursor.execute('''select distinct 
im.img_adress img,
       shoes_name names,
       s_p_c.price_for_one pricef1,
       s_p_c.price_for_all pricefall, 
       q_p_c.shoes_in_package shoes_all, 
       listagg(s_r.shoes_size, ',') within group(order by s_r.shoes_size) over (partition by c.shoes_id) size_list, 
       listagg(s_r.quantity_in_package, ',') within group(order by s_r.quantity_in_package) over (partition by c.shoes_id) sub_size_list 
       from categorys_of_shoes c 
       left join 
       size_range s_r on c.shoes_id =s_r.shoes_id 
       left join
       shoes_img im
       on c.shoes_id = im.shoes_id
       left join 
       shoes s 
       on c.shoes_id=s.shoes_id
       left join 
       quantity_package_change q_p_c
       on c.shoes_id=q_p_c.shoes_id
       left join 
       sell_price_change s_p_c
       on c.shoes_id=s_p_c.shoes_id
where c.sub_category_id ='''+ str(nums[0]) +''' and c.category_id = ''' + str(nums[1])+''' and q_p_c.end_date is null and s_p_c.end_date is null''')
#агружаем в переменную полученные нами значения
result = mycursor.fetchall()
shoes_nam = []
new_mas = []
sz=''
ans = []
for (img, names, pricef1, pricefall, shoesall, size_list, sub_size_list) in result:
        mas_size_list= size_list.split(',')
        mas_sub_size_list=sub_size_list.split(',')
        for i in range(len(mas_sub_size_list)):
                sz = sz + str(mas_sub_size_list[i])+'шт - '+str(mas_size_list[i])+'<br/>'
        ans.append(sz)
        sz = ''
result2 = [[], [], [], [], []]


for  (img, names, pricef1, pricefall, shoesall, size_list, sub_size_list) in result:
        result2[0].append(names)
        result2[1].append(img)
        result2[2].append(pricef1)
        result2[3].append(pricefall)
        result2[4].append(shoesall)
result2.append(ans)
#qwe=json.dumps(result2,ensure_ascii=False).encode('utf8')
#f = open('buff.txt', 'w')
with open('data.json', 'w') as outfile:
    json.dump(result2, outfile)
#f.close()
