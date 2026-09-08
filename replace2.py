import os
import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace Who Am I
pattern = re.compile(r'Ketertarikan saya pada bagaimana data dapat diolah.*?pencapaian tujuan organisasi\.', re.DOTALL)
new_text = '''Informatics graduate (Cum Laude, 3.86 GPA) with a strong interest in Data Analytics and Data Science. Experienced in transforming raw data into strategic insights through the MSIB program, independent projects, and my role as a Laboratory Assistant. Proficient in using SQL, Python, Excel, Power BI, and Tableau for data cleaning, machine learning, and data visualization. With strong analytical skills and accustomed to working in a team, I am ready to contribute by providing data-driven recommendations to support business decisions.'''
content = pattern.sub(new_text, content)

# Replace Skills Array
pattern2 = re.compile(r'\\s*=\s*\[.*?\];', re.DOTALL)
new_skills = '''\ = [
                // Data Science & Analytics Focus
                ['name' => 'Python', 'folder' => 'python', 'file' => 'python-original'],
                ['name' => 'Pandas', 'folder' => 'pandas', 'file' => 'pandas-original'],
                ['name' => 'NumPy', 'folder' => 'numpy', 'file' => 'numpy-original'],
                ['name' => 'Jupyter', 'folder' => 'jupyter', 'file' => 'jupyter-original'],
                ['name' => 'MySQL', 'folder' => 'mysql', 'file' => 'mysql-original-wordmark'],
                ['name' => 'PostgreSQL', 'folder' => 'postgresql', 'file' => 'postgresql-original'],
                ['name' => 'Excel', 'folder' => 'microsoft', 'file' => 'microsoft-original'],
                ['name' => 'Tableau', 'folder' => 'tableau', 'file' => 'tableau-original'],
                ['name' => 'Power BI', 'folder' => 'powerbi', 'file' => 'powerbi-original'], 
                ['name' => 'scikit-learn', 'folder' => 'scikitlearn', 'file' => 'scikitlearn-original'],
                ['name' => 'Laravel', 'folder' => 'laravel', 'file' => 'laravel-original'],
                ['name' => 'ReactJS', 'folder' => 'react', 'file' => 'react-original'],
                ['name' => 'JavaScript', 'folder' => 'javascript', 'file' => 'javascript-original'],
                ['name' => 'Git', 'folder' => 'git', 'file' => 'git-original']
            ];'''
content = pattern2.sub(new_skills, content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
