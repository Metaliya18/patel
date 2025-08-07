filename = "sample.txt"

# Create a sample file for demonstration
with open(filename, "w") as file:
    file.write("Hello, world!\n")
    file.write("Python programming is fun.\n")
    file.write("Let's count characters, words, and lines.\n")

# Initialize counters
num_chars = 0
num_words = 0
num_lines = 0

# Open the file and count
with open(filename, "r") as file:
    for line in file:
        num_lines += 1
        num_chars += len(line)
        num_words += len(line.split())

print(f"File: {filename}")
print(f"Number of characters: {num_chars}")
print(f"Number of words: {num_words}")
print(f"Number of lines: {num_lines}")
