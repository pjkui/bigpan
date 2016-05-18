#!/usr/bin/env python3
# -*- coding: utf-8 -*-
print('我可以测量你的BMI')
h=input('请输入你的身高(m):')
w=input('请输入你的体重(kg):')
high=float(h)
weight=int(w)
bmi = weight/(high*high)
print('BMI=',bmi)
if bmi>32:
    print('严重肥胖')
elif bmi>=28:
    print('肥胖')
elif bmi>=25:
    print('过重')
elif bmi>=18.5:
    print('正常')
else:
    print('过轻')