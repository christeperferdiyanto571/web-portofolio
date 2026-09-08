import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

replacements = {
    'â€”': '—',
    'â€“': '–',
    'â€¢': '•',
    'ðŸŽ§': '🎧',
    'ðŸ“–': '📖',
    'ðŸ“ˆ': '📈',
    'âœ¨': '✨',
    'Â': '',
    'â€œ': '“',
    'â€': '”',
    'ðŸ“': '📄',
    'ðŸ“ ': '📄',
    'ðŸ“Œ': '📌',
    'ðŸ“‘': '📄',
    'ðŸ“œ': '📜',
    'â€': '”',
    'ðŸ’»': '💻',
    'ðŸ”§': '🔧',
    'ðŸ“Š': '📊',
    'ðŸŒ ': '🌐',
    'âœ…': '✅'
}

for bad, good in replacements.items():
    content = content.replace(bad, good)

# Also let's replace the SUMMARY section according to the user request.
old_summary = '''Bachelor's graduate in Informatics from Universitas Ahmad Dahlan with a strong interest in Information Technology, Data Analytics, Data Science, and Web Development. Experienced as an Informatics Laboratory Assistant, responsible for preparing practical materials, mentoring students, assessing practical work, troubleshooting software issues, and supporting computer laboratory management. Skilled in data processing, cleaning, validation, and visualization using Microsoft Excel, SQL, Python (Pandas), Power BI, and Tableau, as well as developing web applications using Laravel, React.js, PHP, HTML, CSS, JavaScript, and MySQL. Familiar with Windows, Linux, basic computer networking, and IT troubleshooting. A fast learner with strong analytical, problem-solving, communication, and teamwork skills, eager to contribute as an IT Support, Data Analyst, Data Scientist, System Administrator, or Web Developer.'''

new_summary = '''Informatics graduate from Universitas Ahmad Dahlan with a strong focus on Data Analytics and Data Science. Experienced as a Laboratory Assistant in preparing practical materials and mentoring students. Skilled in data processing, cleaning, validation, and visualization using Microsoft Excel, SQL, Python (Pandas), Power BI, and Tableau. Has foundational knowledge in developing web applications to build interactive data dashboards. A fast learner with strong analytical, problem-solving, and teamwork skills, eager to contribute as a Data Analyst or Data Scientist.'''

# The file might have line breaks, so we can replace it carefully.
import re
# Find the exact text in the file ignoring newlines and whitespace differences
# We will use regex sub with a flexible whitespace matcher
old_summary_pattern = re.escape("Bachelor's graduate in Informatics from Universitas Ahmad Dahlan").replace(r'\ ', r'\s+') + r'.*?' + re.escape("System Administrator, or Web Developer.")
content = re.sub(old_summary_pattern, new_summary, content, flags=re.DOTALL)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
