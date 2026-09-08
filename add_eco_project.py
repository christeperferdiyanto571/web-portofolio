import os

file_path = 'D:/portofolio/web-portofolio/resources/views/portfolio.blade.php'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

new_project = '''
                [
                    'title' => 'E-Commerce Churn Risk Analytics',
                    'category' => 'Business Intelligence',
                    'image' => asset('eco.png'),
                    'color' => 'blue',
                    'delay' => '0ms',
                    'tags' => [
                        ['name' => 'MySQL', 'color' => 'sky'],
                        ['name' => 'Tableau', 'color' => 'blue'],
                        ['name' => 'Data Analytics', 'color' => 'indigo'],
                    ],
                    'desc_short' => 'Analisis komprehensif terhadap data pelanggan e-commerce untuk menemukan akar penyebab churn dan merumuskan strategi retensi.',
                    'desc_full' => 'Proyek analisis end-to-end (ETL) yang melibatkan Data Ingestion dan Cleansing menggunakan MySQL terhadap 50.000+ data pelanggan. Hasil pembersihan divisualisasikan ke dalam satu narasi interaktif menggunakan Tableau untuk mengidentifikasi pola perilaku pelanggan dan merumuskan strategi retensi bisnis.',
                    'tech_stack' => 'MySQL (Data Cleansing & Transformation), Tableau (Data Visualization).',
                    'system_db' => 'Data diekstrak dan diproses di MySQL lokal, kemudian dihubungkan ke Tableau untuk visualisasi dinamis.',
                    'links' => []
                ],'''

content = content.replace(' = [', ' = [' + new_project)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
