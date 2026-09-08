import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the categories
content = content.replace("'category' => 'Web Development',", "'category' => 'Data Analysis',")

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
