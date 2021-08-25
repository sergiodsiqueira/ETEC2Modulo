using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Text.RegularExpressions;

namespace P_valida_dados
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public static bool ValidaEmail(string strEmail)
        {
            string strModelo = "^([0-9a-zA-Z]([-.\\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\\w]*[0-9a-zA-Z]\\.)+[a-zA-Z]{2,9})$";
            if (System.Text.RegularExpressions.Regex.IsMatch(strEmail, strModelo))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public static bool ValidaTelefone(string strNumero)
        {
            string strModelo = @"^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$";
            if (System.Text.RegularExpressions.Regex.IsMatch(strNumero, strModelo))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public static bool ValidaCPF(string vrCPF)
        {

            string valor = vrCPF.Replace(".", "");
            valor = valor.Replace("-", "");

            if (valor.Length != 11)
                return false;

            bool igual = true;
            for (int i = 1; i < 11 && igual; i++)
                if (valor[i] != valor[0])
                    igual = false;

            if (igual || valor == "12345678909")
                return false;

            int[] numeros = new int[11];

            for (int i = 0; i < 11; i++)
                numeros[i] = int.Parse(valor[i].ToString());

            int soma = 0;
            for (int i = 0; i < 9; i++)
                soma += (10 - i) * numeros[i];

            int resultado = soma % 11;
            if (resultado == 1 || resultado == 0)
            {
                if (numeros[9] != 0)
                    return false;
            }
            else if (numeros[9] != 11 - resultado)
                return false;

            soma = 0;
            for (int i = 0; i < 10; i++)
                soma += (11 - i) * numeros[i];

            resultado = soma % 11;

            if (resultado == 1 || resultado == 0)
            {
                if (numeros[10] != 0)
                    return false;
            }
            else
                if (numeros[10] != 11 - resultado)
                return false;

            return true;
        }

        private void btn_verificar_Click(object sender, EventArgs e)
        {
            if (ValidaCPF(mskCPF.Text) == false)
                MessageBox.Show("CPF Inválido!!!!!");
            else
                MessageBox.Show("CPF Válido!!!");
        }

        private void txtEmail_Leave(object sender, EventArgs e)
        {
            if (!ValidaEmail(txtEmail.Text))
            {
                MessageBox.Show("E-mail inválido!");
            }
            
        }

        private void txtCelular_Leave(object sender, EventArgs e)
        {
            if (!ValidaTelefone(txtCelular.Text))
            {
                MessageBox.Show("Celular inválido!");
            }
        }

        private void cmbUF_SelectedIndexChanged(object sender, EventArgs e)
        {
            String[] SP = { "Esp. Sto. do Pinhal", "São Paulo", "Mogi-Guaçu" };
            String[] MG = { "Albertina", "Andradas", "Belo Horizonte", "Jacutinga" };

            cmbCidade.Text = "";
            cmbCidade.Items.Clear();

            if (cmbUF.Text == "SP") 
            {
                cmbCidade.Items.AddRange(SP);
            }
            else if (cmbUF.Text == "MG")
            {
                cmbCidade.Items.AddRange(MG);
            }
        }

        private void btnCarregar_Click(object sender, EventArgs e)
        {
            listBox1.Items.Clear();

            listBox1.Items.Add("CPF:" + mskCPF.Text);
            listBox1.Items.Add("EMAIL:" + txtEmail.Text);
            listBox1.Items.Add("CELULAR:" + txtCelular.Text);
            listBox1.Items.Add("--------------------------------------------------------");
            listBox1.Items.Add("UF:" + cmbUF.Text);
            listBox1.Items.Add("CIDADE:" + cmbCidade.Text);
        }
    }
}
