#!/usr/bin/env python3
# -*- coding: utf-8 -*-

my_set = set(['1',2,3,4,2,1,'1'])
#set添加一个元素
my_set.add(6)
#set删除一个元素
my_set.remove(3)
#print(my_set)
set1 = set([1,2,3,4])
set2 = set([3,4,5,6])
#取两个set的交集
print(set1 & set2)
#取两个set的并集
print(set1 | set2)
