import sys

def main():
    if len(sys.argv) != 3:
        print("Uso: python receber.py <id> <name>")
        return
    
    company_id = sys.argv[1]
    company_name = sys.argv[2]

    print(f"Dados recebidos:\nID: {company_id}\nNome: {company_name}")

if __name__ == "__main__":
    main()
