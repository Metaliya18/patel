# Sample string
text = "Hello, Python!"

# i) Accessing string by Indexing
print("Accessing by Indexing:")
print(f"Character at index 0 (positive index): {text[0]}")    # 'H'
print(f"Character at index 7 (positive index): {text[7]}")    # 'P'
print(f"Character at index -1 (negative index): {text[-1]}")  # '!'
print(f"Character at index -7 (negative index): {text[-7]}")  # 'P'

print()  # blank line

# ii) Accessing string by Slicing
print("Accessing by Slicing:")
print(f"text[0:5]: {text[0:5]}")    # 'Hello'
print(f"text[7:13]: {text[7:13]}")  # 'Python'
print(f"text[:5]: {text[:5]}")      # 'Hello' (from start to index 4)
print(f"text[7:]: {text[7:]}")      # 'Python!' (from index 7 to end)
print(f"text[-7:-1]: {text[-7:-1]}") # 'Python' (negative slicing)

# Slicing with step
print(f"text[::2]: {text[::2]}")    # Every 2nd character from start
print(f"text[1:10:3]: {text[1:10:3]}")  # Characters from index 1 to 9 with step 3
