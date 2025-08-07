# Global variable
message = "Hello from the global scope!"

def greet():
    # Local variable
    message = "Hello from the local scope!"
    print("Inside function:", message)

greet()  # Prints local variable
print("Outside function:", message)  # Prints global variable

# Modifying global variable inside a function
def change_global():
    global message
    message = "Global variable modified!"
    print("Inside change_global():", message)

change_global()
print("Outside after modification:", message)
