
name = input("Enter your name: ")
age = input("Enter your age: ")


print("\nUsing print() to display values:")
print("Name:", name)
print("Age:", age)


print("\nUsing print() with sep attribute:")
print("Python", "is", "fun", sep="*")


print("\nUsing print() with end attribute:")
print("Hello,", end=" ")
print("world!")


print("\nUsing replacement operator with {}:")
print("My name is {} and I am {} years old.".format(name, age))
