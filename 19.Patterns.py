# Pattern 1
print("Pattern 1:")
for i in range(1, 6):
    print(str(i) * i)

print()  # Blank line

# Pattern 2
print("Pattern 2:")
for i in range(1, 6):
    for j in range(i):
        print(chr(65 + j), end=" ")
    print()

print()  # Blank line

# Pattern 3
print("Pattern 3:")
for i in range(5, 0, -1):
    print("*" * i)
