using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinFormsApp1
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

        private void button3_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            txtbNota1.Clear();
            txtbNota2.Clear();
            lblResultado.Text = "0";
            lblResultado.ForeColor = Color.Black;
            lblMencao.Text = "";

            txtbNota1.Focus();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            double Nota1, Nota2, Resultado;

            if (txtbNota1.Text == "" || txtbNota2.Text == "")
            {
                MessageBox.Show("Verifique os valores das notas!");
            }
            else
            {
                Nota1 = double.Parse(txtbNota1.Text);
                Nota2 = double.Parse(txtbNota2.Text);

                Resultado = (Nota1 + Nota2) / 2;

                if (Resultado >= 0 && Resultado <= 10)
                    lblResultado.Text = Resultado.ToString();

                if (Resultado <= 5)
                    lblResultado.ForeColor = Color.Red;
                else if (Resultado > 5 && Resultado <= 10)
                    lblResultado.ForeColor = Color.Blue;

                if (Resultado <= 5)
                {
                    lblMencao.Text = "I";
                    lblMencao.ForeColor = Color.Red;
                }
                else if (Resultado > 5 && Resultado <= 7)
                {
                    lblMencao.Text = "R";
                    lblMencao.ForeColor = Color.Blue;
                }
                else if (Resultado > 7 && Resultado <= 9)
                {
                    lblMencao.Text = "B";
                    lblMencao.ForeColor = Color.Blue;
                }
                else if (Resultado > 9 && Resultado <= 10)
                {
                    lblMencao.Text = "MB";
                    lblMencao.ForeColor = Color.Blue;
                }
            }
        }

        private void txtbNota1_Validating(object sender, CancelEventArgs e)
        {
            if (txtbNota1.Text != "")
            {
                if (double.Parse(txtbNota1.Text) <= 0 || double.Parse(txtbNota1.Text) > 10)
                {
                    MessageBox.Show("Nota incorreta!");
                    txtbNota1.Focus();
                }
            }
        }

        private void txtbNota2_Validating(object sender, CancelEventArgs e)
        {
            if (txtbNota2.Text != "")
            {
                if (double.Parse(txtbNota2.Text) <= 0 || double.Parse(txtbNota2.Text) > 10)
                {
                    MessageBox.Show("Nota incorreta!");
                    txtbNota2.Focus();
                }
            }
        }

        private void txtbNota1_KeyPress(object sender, KeyPressEventArgs e)
        {
            e.Handled = isValidNumber(e, sender);
        }

        private void txtbNota2_KeyPress(object sender, KeyPressEventArgs e)
        {
            e.Handled = isValidNumber(e, sender);
        }
    }
}
