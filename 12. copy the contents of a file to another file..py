# Copy contents from source file to destination file

source_file = "source.txt"
destination_file = "destination.txt"

# First, create and write some content to source_file for demonstration
with open(source_file, "w") as file:
    file.write("This is the source file.\n")
    file.write("We will copy this content to another file.\n")

# Now copy the contents
with open(source_file, "r") as src:
    content = src.read()

with open(destination_file, "w") as dest:
    dest.write(content)

print(f"Contents of '{source_file}' have been copied to '{destination_file}'.")
