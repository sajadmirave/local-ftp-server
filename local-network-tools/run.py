import os


ip = input('pls enter your ip address: ')

os.system(f"php artisan serve --host={ip} --port=8888")
