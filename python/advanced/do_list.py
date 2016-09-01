#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#列表生成式
#L = [ p * p for p in range(1,99)]
#print(L)
#for k in L:
 #   print(k)

#两层循环，可以生成全排列
N = ['Tom','Jack','Jim','Jason']
A = ['do','sleep','eat','dance']
P = [ name + action for name in N for action in A]

print(P)