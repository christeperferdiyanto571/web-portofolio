import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# The current text is the old English text.
old_text = '''Hello! I'm Chris Teper Ferdiyanto, a Cum Laude Informatics graduate from Universitas Ahmad Dahlan. I specialize at the intersection of Data Science and Web Development.

With a strong foundation in data processing (Python, SQL) and modern web technologies (React, Node.js, PHP), I don't just analyze complex datasets—I build the interactive platforms to visualize and deliver those insights. Backed by my experience as a Data Science Mentee at Startup Campus and an Informatics Lab Assistant, I am passionate about transforming raw data into meaningful, user-friendly digital experiences.'''

new_text = '''Informatics graduate (Cum Laude, 3.86 GPA) with a strong passion for Data Analytics and Data Science. Experienced in transforming raw data into strategic insights through the MSIB program, independent projects, and a role as a Laboratory Assistant. Proficient in using SQL, Python, Excel, Power BI, and Tableau for data cleaning, machine learning, and data visualization. Possesses excellent analytical skills and works well in teams, ready to contribute by providing data-driven recommendations to support organizational business decisions.'''

# Sometimes the em-dash '—' is encoded differently, so let's use a regex to replace everything between 'Hello!' and 'digital experiences.'
pattern = re.compile(r'Hello!.*?digital experiences\.', re.DOTALL)
content = pattern.sub(new_text, content)

# Also check for "Data Scientist & Web Developer" in the header
content = content.replace('Data Scientist & Web Developer', 'Data Science & Data Analyst')

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
