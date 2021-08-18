using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AppCalculoIMC
{
    public partial class frmPrincipal : Form
    {
        public frmPrincipal()
        {
            InitializeComponent();
        }

        public static Boolean isValidNumber(KeyPressEventArgs pValue, object pSender)
        {
            if (pValue.KeyChar == '.' || pValue.KeyChar == ',')
            {
                if ((pSender as TextBox).Text.Contains(","))
                {
                    return true;
                }
                else
                {
                    (pSender as TextBox).Text = (pSender as TextBox).Text + ',';
                    (pSender as TextBox).SelectionStart = (pSender as TextBox).Text.Length;
                    (pSender as TextBox).ScrollToCaret();
                    return true;
                }
            }
            else if (!char.IsNumber(pValue.KeyChar) && !(pValue.KeyChar == (char)Keys.Back))
            {
                return true;
            }

            return false;
        }

        public static Boolean isEmpty(object pSender)
        {
                 if ((pSender as TextBox).Text == "")
                {
                    MessageBox.Show("Atenção!!! Verifique o valor!");
                    (pSender as TextBox).Focus();
                    return false;
                }
                else
                {
                    return true;
                }
        }

        public void Limpar()
        {
            edtAltura.Value = 0;
            edtPeso.Clear();
            progressBar1.Value = 0;
            lblIMC.Text = "?";

            edtPeso.Focus();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            if (edtPeso.Text == "")
            {
                MessageBox.Show("Atenção! Peso em branco!");
                return;
            }

            if (edtAltura.Value <= 0)
            {
                MessageBox.Show("Atenção! Altura irregular!");
                return;
            }


            double peso, altura, imc;

            peso = double.Parse(edtPeso.Text);
            altura = double.Parse(edtAltura.Text)/100;

            imc = peso / (altura * altura);

            lblIMC.Text = imc.ToString("N2");
            //lblIMC.Text = altura.ToString();

            progressBar1.Value = (int)imc;
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            Limpar();
        }

        private void btnFechar_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            Limpar();
        }

        private void rbtnFeminino_CheckedChanged(object sender, EventArgs e)
        {
            Limpar();
        }

        private void edtPeso_KeyPress(object sender, KeyPressEventArgs e)
        {
            isValidNumber(e, sender);
        }

        private void label5_Click(object sender, EventArgs e)
        {

        }
    }
}
