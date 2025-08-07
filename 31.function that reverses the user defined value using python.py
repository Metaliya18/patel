def reverse_value(value):
    return value[::-1]

# Get input from user
user_input = input("Enter a value to reverse: ")

# Reverse and print
reversed_value = reverse_value(user_input)
print("Reversed value:", reversed_value)
