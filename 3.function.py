# Python program to demonstrate id(), type(), and range() functions

# Define a variable
x = 42
print("Value of x:", x)

# id() function - returns the memory address (identity) of the object
print("Memory ID of x:", id(x))

# type() function - returns the type of the object
print("Type of x:", type(x))

# range() function - generates a sequence of numbers
print("\nUsing range() to generate numbers from 0 to 4:")
for i in range(5):
    print(i)

# Using range() with start and step
print("\nUsing range() from 2 to 10 with step 2:")
for i in range(2, 11, 2):
    print(i)
