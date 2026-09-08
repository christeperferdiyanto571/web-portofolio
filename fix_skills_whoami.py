import re

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace Who Am I text
new_text = '''My interest in how data can be processed into information and insights that support decision-making was the starting point of my passion for Data Analytics and Data Science. I am an Informatics graduate from Universitas Ahmad Dahlan, graduating Cum Laude with a 3.86 GPA. During my studies, I developed my skills through various data projects, my experience as a Laboratory Assistant, an MSIB program in Data Science, as well as various training and certifications. These experiences have shaped my ability to perform data cleaning, exploratory data analysis (EDA), data visualization, statistical analysis, dashboarding, data mining, and machine learning. I am proficient in using SQL, Python (Pandas, NumPy, Scikit-learn), Microsoft Excel, Power BI, and Tableau to process data, discover patterns and insights, and compile analytical results to support decision-making. I also have experience working on data mining and machine learning projects, from data processing to model evaluation. My academic, organizational, and Laboratory Assistant experiences have further honed my analytical thinking, meticulous and systematic work ethic, communication, and teamwork skills. As a fresh graduate, I am eager to apply and continuously develop the competencies I have built through professional experience in the data field. I hope to contribute through accurate data analysis, informative visualizations, relevant insights, and recommendations that support organizational decision-making and goal achievement.'''

pattern_whoami = re.compile(r'Informatics graduate \(Cum Laude, 3\.86 GPA\).*?organizational business decisions\.', re.DOTALL)
content = pattern_whoami.sub(new_text, content)

# But wait, earlier I replaced it with the previous translation. So it's looking for "Informatics graduate (Cum Laude...)"
# If it doesn't find it, I'll fall back to searching for "Hello! I'm Chris..." just in case it didn't save.
pattern_whoami_fallback = re.compile(r'Hello!.*?digital experiences\.', re.DOTALL)
content = pattern_whoami_fallback.sub(new_text, content)


# Now update the  array
new_skills = ''' = [
                ['name' => 'Python', 'folder' => 'python', 'file' => 'python-original'],
                ['name' => 'Pandas', 'folder' => 'pandas', 'file' => 'pandas-original'],
                ['name' => 'NumPy', 'folder' => 'numpy', 'file' => 'numpy-original'],
                ['name' => 'scikit-learn', 'folder' => 'scikitlearn', 'file' => 'scikitlearn-original'],
                ['name' => 'Jupyter', 'folder' => 'jupyter', 'file' => 'jupyter-original'],
                ['name' => 'SQL', 'folder' => 'sqldeveloper', 'file' => 'sqldeveloper-original'],
                ['name' => 'MySQL', 'folder' => 'mysql', 'file' => 'mysql-original-wordmark'],
                ['name' => 'PostgreSQL', 'folder' => 'postgresql', 'file' => 'postgresql-original'],
                ['name' => 'Excel', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Microsoft_Office_Excel_%282019%E2%80%93present%29.svg'],
                ['name' => 'Tableau', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4b/Tableau_Logo.png'],
                ['name' => 'Power BI', 'url' => 'https://upload.wikimedia.org/wikipedia/commons/c/cf/New_Power_BI_Logo.svg']
            ];'''

pattern_skills = re.compile(r'\\s*=\s*\[.*?\];', re.DOTALL)
content = pattern_skills.sub(new_skills, content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
