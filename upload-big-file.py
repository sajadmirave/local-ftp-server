import os
import shutil

file_path = input('enter you big path: ')
file = input('file name: ')

# Get the current directory
current_path = os.getcwd()

# Define the source file path (change it according to your actual file path)
source_file = file_path

# Construct the destination file path
destination_file = os.path.join(current_path, "uploads", file)

# Move the file using shutil.move
shutil.move(source_file, destination_file)
