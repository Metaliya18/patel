# Create a sample file for demonstration
filename = "sample.txt"
with open(filename, "w") as file:
    file.write("Hello, world!\n")
    file.write("Python programming is fun.\n")
    file.write("Let's reverse each line.\n")

# Read the file and print each line reversed
print("Each line in reverse order:")
with open(filename, "r") as file:
    for line in file:
        # Strip newline at end and reverse the characters
        reversed_line = line.rstrip('\n')[::-1]
        print(reversed_line)
