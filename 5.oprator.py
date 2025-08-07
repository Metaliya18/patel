# Python program demonstrating various operators

# i) Arithmetic Operators
a = 10
b = 3
print("Arithmetic Operators:")
print(f"a + b = {a + b}")    # Addition
print(f"a - b = {a - b}")    # Subtraction
print(f"a * b = {a * b}")    # Multiplication
print(f"a / b = {a / b}")    # Division (float)
print(f"a // b = {a // b}")  # Floor Division
print(f"a % b = {a % b}")    # Modulus
print(f"a ** b = {a ** b}")  # Exponentiation
print()

# ii) Relational Operators
print("Relational Operators:")
print(f"a == b: {a == b}")   # Equal to
print(f"a != b: {a != b}")   # Not equal to
print(f"a > b: {a > b}")     # Greater than
print(f"a < b: {a < b}")     # Less than
print(f"a >= b: {a >= b}")   # Greater than or equal to
print(f"a <= b: {a <= b}")   # Less than or equal to
print()

# iii) Assignment Operator
print("Assignment Operators:")
c = 5
print(f"Initial c = {c}")
c += 3   # c = c + 3
print(f"After c += 3, c = {c}")
c -= 2   # c = c - 2
print(f"After c -= 2, c = {c}")
c *= 4   # c = c * 4
print(f"After c *= 4, c = {c}")
c /= 3   # c = c / 3
print(f"After c /= 3, c = {c}")
c %= 3   # c = c % 3
print(f"After c %= 3, c = {c}")
print()

# iv) Logical Operators
print("Logical Operators:")
x = True
y = False
print(f"x and y: {x and y}")  # Logical AND
print(f"x or y: {x or y}")    # Logical OR
print(f"not x: {not x}")      # Logical NOT
print()

# v) Bitwise Operators
print("Bitwise Operators:")
m = 10  # (1010 in binary)
n = 4   # (0100 in binary)
print(f"m = {m}, n = {n}")
print(f"m & n = {m & n}")   # Bitwise AND
print(f"m | n = {m | n}")   # Bitwise OR
print(f"m ^ n = {m ^ n}")   # Bitwise XOR
print(f"~m = {~m}")         # Bitwise NOT
print(f"m << 2 = {m << 2}") # Left shift
print(f"m >> 2 = {m >> 2}") # Right shift
print()

# vi) Ternary Operator
print("Ternary Operator:")
age = 20
status = "Adult" if age >= 18 else "Minor"
print(f"Age: {age}, Status: {status}")
