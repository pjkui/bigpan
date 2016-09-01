#!/usr/bin/env python3
# -*- coding: utf-8 -*-
import os
#列表生成式
#L = [ p * p for p in range(1,99)]
#print(L)
# for k in L:
#   print(k)
#print([ a for a in range(2,10) if a % 2 == 0])
'''
#两层循环，可以生成全排列
N = ['Tom','Jack','Jim','Jason']
A = ['do','sleep','eat','dance']
P = [ name + action for name in N for action in A]

print(P)
 '''
#查看当前目录下的所有文件
# print([d for d in os.listdir('../')])
# my_dir = {'aa':'AA','bb':'BB','cc':'CC'}
# print([k + '=>' + v for k,v in my_dir.items()])

# L = ['Hello', 'World', 'IBM', 'Apple']
# print([s.lower() for s in L])
L1 = ['Hello', 'World', 18, 'Apple', None]
L2 = [s.lower() for s in L1 if isinstance(s,str) == True]
print(L2)
