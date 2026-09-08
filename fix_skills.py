import os
import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Remove certifications section
pattern_cert = re.compile(r'<!-- Certifications Section \(Swiper Cards\) -->.*?</section>', re.DOTALL)
content = pattern_cert.sub('', content)

# 2. Update allSkills array
pattern_skills = re.compile(r'\\s*=\s*\[.*?\];', re.DOTALL)
new_skills = '''\ = [
                // Data Science & Analytics Focus
                ['name' => 'Python', 'folder' => 'python', 'file' => 'python-original'],
                ['name' => 'Pandas', 'folder' => 'pandas', 'file' => 'pandas-original'],
                ['name' => 'NumPy', 'folder' => 'numpy', 'file' => 'numpy-original'],
                ['name' => 'Jupyter', 'folder' => 'jupyter', 'file' => 'jupyter-original'],
                ['name' => 'MySQL', 'folder' => 'mysql', 'file' => 'mysql-original-wordmark'],
                ['name' => 'PostgreSQL', 'folder' => 'postgresql', 'file' => 'postgresql-original'],
                ['name' => 'Excel', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Microsoft_Office_Excel_%282019%E2%80%93present%29.svg'],
                ['name' => 'Tableau', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4b/Tableau_Logo.png'],
                ['name' => 'Power BI', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/c/cf/New_Power_BI_Logo.svg'], 
                ['name' => 'scikit-learn', 'folder' => 'scikitlearn', 'file' => 'scikitlearn-original'],
                ['name' => 'Laravel', 'folder' => 'laravel', 'file' => 'laravel-original'],
                ['name' => 'ReactJS', 'folder' => 'react', 'file' => 'react-original'],
                ['name' => 'JavaScript', 'folder' => 'javascript', 'file' => 'javascript-original'],
                ['name' => 'Git', 'folder' => 'git', 'file' => 'git-original']
            ];'''
content = pattern_skills.sub(new_skills, content)

# 3. Update the img tag logic to handle 'url'
# There are two places (row1 and row2)
img_pattern = re.compile(r'<img src="https://cdn\.jsdelivr\.net/gh/devicons/devicon@latest/icons/\{\{ \\[\'folder\'\] \}\}/\{\{ \\[\'file\'\] \}\}\.svg"(.*?)>')
# We can replace it with:
new_img = r'<img src="{{ isset([\'url\']) ? [\'url\'] : \'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/\' . [\'folder\'] . \'/\' . [\'file\'] . \'.svg\' }}"\1>'
content = img_pattern.sub(new_img, content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
