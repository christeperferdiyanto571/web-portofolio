import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

bad_string = '''                    ]
                    ]
                 ],
                [
                    'title' => 'Nature AI Classification','''

good_string = '''                    ]
                ],
                [
                    'title' => 'Nature AI Classification','''

content = content.replace(bad_string, good_string)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
