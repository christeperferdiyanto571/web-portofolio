import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace("strings: ['Web Developer.', 'Data Scientist.'],", "strings: ['Data Analyst.', 'Data Scientist.'],")

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
