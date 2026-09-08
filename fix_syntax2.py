import os
import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

content = re.sub(r'\]\s*\]\s*\],\s*\[\s*\'title\' => \'Nature AI Classification\'', r']\n                ],\n                [\n                    \'title\' => \'Nature AI Classification\'', content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
