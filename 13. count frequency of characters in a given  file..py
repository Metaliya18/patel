# Program to count frequency of characters in a file

filename = "sample.txt"

# Create a sample file for demonstration
with open(filename, "w") as file:
    file.write("Hello, world!\nThis is a sample file.\nCounting characters frequency.")

# Initialize an empty dictionary to store frequencies
char_frequency = {}

# Read the file and count character frequencies
with open(filename, "r") as file:
    content = file.read()
    for char in content:
        if char in char_frequency:
            char_frequency[char] += 1
        else:
            char_frequency[char] = 1

# Display the character frequencies
print(f"Character frequency in '{filename}':")
for char, freq in sorted(char_frequency.items()):
    # Show whitespace characters in a readable way
    if char == "\n":
        display_char = "\\n"
    elif char == " ":
        display_char = "' '"
    else:
        display_char = char
    print(f"'{display_char}': {freq}")
