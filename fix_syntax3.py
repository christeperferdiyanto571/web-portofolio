import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace("\\'title\\' => \\'Nature AI Classification\\'", "'title' => 'Nature AI Classification'")

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
