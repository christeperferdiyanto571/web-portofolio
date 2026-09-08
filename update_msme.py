import os
import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# We need to find the MSME Data Clustering Tool block and replace its links
msme_pattern = re.compile(r"('title'\s*=>\s*'MSME Data Clustering Tool'.*?'links'\s*=>\s*\[)(.*?)(\]\s*\])", re.DOTALL)

def replacer(match):
    prefix = match.group(1)
    suffix = match.group(3)
    new_links = '''
                        ['type' => 'live', 'url' => 'https://christeperferdiyanto571.github.io/msme-clustering/', 'text' => 'Live App'],
                        ['type' => 'live', 'url' => 'https://colab.research.google.com/drive/1j1gRBoDCgWOBPz_LDdaeA7k_e9LBVk7l#scrollTo=B3qTV3WP4BiO', 'text' => 'Colab'],
                        ['type' => 'live', 'url' => 'https://canva.link/3tsqieq0xwwy4sp', 'text' => 'Presentation'],
                        ['type' => 'github', 'url' => 'https://github.com/christeperferdiyanto571/msme-clustering', 'text' => 'Source Code']
                    '''
    return prefix + new_links + suffix

new_content = msme_pattern.sub(replacer, content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(new_content)
