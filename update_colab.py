import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace('https://colab.research.google.com/drive/1j1gRBoDCgWOBPz_LDdaeA7k_e9LBVk7l#scrollTo=B3qTV3WP4BiO', 'https://colab.research.google.com/drive/1dUFo5OQ-LFZygsdlhw7R8UrumswGY2RZ?usp=sharing')

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
