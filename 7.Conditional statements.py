# i) if statement
print("Example of if statement:")
num = 10
if num > 5:
    print(f"{num} is greater than 5")
print()  # blank line

# ii) if-else statement
print("Example of if-else statement:")
num = 3
if num % 2 == 0:
    print(f"{num} is even")
else:
    print(f"{num} is odd")
print()  # blank line

# iii) if-elif-else statement
print("Example of if-elif-else statement:")
marks = 75
if marks >= 90:
    grade = 'A'
elif marks >= 75:
    grade = 'B'
elif marks >= 50:
    grade = 'C'
else:
    grade = 'F'

print(f"Marks: {marks}, Grade: {grade}")
