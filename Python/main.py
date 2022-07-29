from ast import If
from account import Account
from car import Car


if __name__ == "__main__":
    print("Hola Mundo")
    
    car = Car("AMS234", Account("Andrés Herrera", "AND123"))
    print(vars(car))
    print(vars(car.driver))

    # car = Car()
    # car.license = "AMS234"
    # car.driver = "Andrés Herrera"
    # print(vars(car))

    # car2 = Car()
    # car2.license = "ghe432"
    # car2.driver = "Andrea Herrería"
    # print(vars(car2))
