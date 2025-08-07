# Writing to a file
with open("example.txt", "w") as file:
    file.write("Hello, world!\n")
    file.write("This is a sample file.\n")
    file.write("We are learning file operations in Python.\n")

print("Data written to file successfully.")

# Reading from the file
print("\nReading the content of the file:")
with open("example.txt", "r") as file:
    content = file.read()
    print(content)
