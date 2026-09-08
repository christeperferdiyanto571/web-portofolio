import os
import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# We need to parse the projects array and remove the ones we don't want.
# Since the array items are blocks, we can just use regex to replace specific blocks.
to_remove = [
    'Sistem Informasi Rumah Sakit (RS)',
    'Portal TI Terpadu & Web-GIS Basarnas',
    'ARFF Airport Emergency Command & Telemetry Hub',
    'JogjaKarya UMKM E-commerce',
    'ChrisFlix Premium Movies'
]

for title in to_remove:
    # Match from '[' up to the matching '],' where title is inside
    pattern = re.compile(r'\[\s*\'title\' => \'' + re.escape(title) + r'\'.*?\]\s*\],', re.DOTALL)
    content = pattern.sub('', content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
