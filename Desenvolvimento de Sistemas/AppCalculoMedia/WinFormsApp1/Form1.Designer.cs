
namespace WinFormsApp1
{
    partial class frmPrincipal
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnCalcular = new System.Windows.Forms.Button();
            this.btnLimpar = new System.Windows.Forms.Button();
            this.btnFechar = new System.Windows.Forms.Button();
            this.txtbNota1 = new System.Windows.Forms.TextBox();
            this.txtbNota2 = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.lblResultado = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.lblMencao = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // btnCalcular
            // 
            this.btnCalcular.Font = new System.Drawing.Font("Roboto", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.btnCalcular.Location = new System.Drawing.Point(24, 171);
            this.btnCalcular.Name = "btnCalcular";
            this.btnCalcular.Size = new System.Drawing.Size(284, 34);
            this.btnCalcular.TabIndex = 0;
            this.btnCalcular.Text = "&CALCULAR";
            this.btnCalcular.UseVisualStyleBackColor = true;
            this.btnCalcular.Click += new System.EventHandler(this.btnCalcular_Click);
            // 
            // btnLimpar
            // 
            this.btnLimpar.Font = new System.Drawing.Font("Roboto", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.btnLimpar.Location = new System.Drawing.Point(24, 319);
            this.btnLimpar.Name = "btnLimpar";
            this.btnLimpar.Size = new System.Drawing.Size(128, 33);
            this.btnLimpar.TabIndex = 1;
            this.btnLimpar.Text = "&LIMPAR";
            this.btnLimpar.UseVisualStyleBackColor = true;
            this.btnLimpar.Click += new System.EventHandler(this.button2_Click);
            // 
            // btnFechar
            // 
            this.btnFechar.Font = new System.Drawing.Font("Roboto", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.btnFechar.Location = new System.Drawing.Point(174, 319);
            this.btnFechar.Name = "btnFechar";
            this.btnFechar.Size = new System.Drawing.Size(128, 33);
            this.btnFechar.TabIndex = 2;
            this.btnFechar.Text = "&FECHAR";
            this.btnFechar.UseVisualStyleBackColor = true;
            this.btnFechar.Click += new System.EventHandler(this.button3_Click);
            // 
            // txtbNota1
            // 
            this.txtbNota1.AcceptsReturn = true;
            this.txtbNota1.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtbNota1.Location = new System.Drawing.Point(208, 61);
            this.txtbNota1.Name = "txtbNota1";
            this.txtbNota1.Size = new System.Drawing.Size(100, 33);
            this.txtbNota1.TabIndex = 3;
            this.txtbNota1.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txtbNota1_KeyPress);
            this.txtbNota1.Validating += new System.ComponentModel.CancelEventHandler(this.txtbNota1_Validating);
            // 
            // txtbNota2
            // 
            this.txtbNota2.AcceptsReturn = true;
            this.txtbNota2.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtbNota2.Location = new System.Drawing.Point(208, 115);
            this.txtbNota2.Name = "txtbNota2";
            this.txtbNota2.Size = new System.Drawing.Size(100, 33);
            this.txtbNota2.TabIndex = 4;
            this.txtbNota2.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txtbNota2_KeyPress);
            this.txtbNota2.Validating += new System.ComponentModel.CancelEventHandler(this.txtbNota2_Validating);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Roboto Lt", 26.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label1.Location = new System.Drawing.Point(30, 5);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(272, 42);
            this.label1.TabIndex = 5;
            this.label1.Text = "Cálculo Médias";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.label2.Location = new System.Drawing.Point(24, 61);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(178, 25);
            this.label2.TabIndex = 6;
            this.label2.Text = "Nota 1º Bimestre:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.label3.Location = new System.Drawing.Point(24, 115);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(178, 25);
            this.label3.TabIndex = 7;
            this.label3.Text = "Nota 2º Bimestre:";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.label4.Location = new System.Drawing.Point(24, 223);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(112, 25);
            this.label4.TabIndex = 8;
            this.label4.Text = "Resultado:";
            // 
            // lblResultado
            // 
            this.lblResultado.AutoSize = true;
            this.lblResultado.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblResultado.Location = new System.Drawing.Point(142, 223);
            this.lblResultado.Name = "lblResultado";
            this.lblResultado.Size = new System.Drawing.Size(24, 25);
            this.lblResultado.TabIndex = 9;
            this.lblResultado.Text = "0";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.label5.Location = new System.Drawing.Point(24, 270);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(93, 25);
            this.label5.TabIndex = 10;
            this.label5.Text = "Menção:";
            // 
            // lblMencao
            // 
            this.lblMencao.AutoSize = true;
            this.lblMencao.Font = new System.Drawing.Font("Roboto", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblMencao.Location = new System.Drawing.Point(142, 270);
            this.lblMencao.Name = "lblMencao";
            this.lblMencao.Size = new System.Drawing.Size(0, 25);
            this.lblMencao.TabIndex = 11;
            // 
            // frmPrincipal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(332, 374);
            this.Controls.Add(this.lblMencao);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.lblResultado);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtbNota2);
            this.Controls.Add(this.txtbNota1);
            this.Controls.Add(this.btnFechar);
            this.Controls.Add(this.btnLimpar);
            this.Controls.Add(this.btnCalcular);
            this.Name = "frmPrincipal";
            this.Text = "ETEC - Cálculo Médias";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnCalcular;
        private System.Windows.Forms.Button btnLimpar;
        private System.Windows.Forms.Button btnFechar;
        private System.Windows.Forms.TextBox txtbNota1;
        private System.Windows.Forms.TextBox txtbNota2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label lblResultado;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label lblMencao;
    }
}

