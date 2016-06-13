#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#迭代
#for x in [1, 2, 3, 4, 5]:
    #print(x)
from collections import Iterable
dic = {'name':'xm','city':'qingdao','sex':'nan'}
dir_two = {'dff':90,'hh':78,'bh':67}
#判断一个对象是否是可迭代对象
print(isinstance(dir_two,Iterable))
exit('end')
#迭代字典中的key value
for X in dic.items():
    print(X)
